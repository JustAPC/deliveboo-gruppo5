<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Dishcategory;
use App\Models\Dish;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUserId = Auth::user()->id;

        $orders = Order::orderBy('updated_at', 'DESC')->where('user_id', '=', $currentUserId)->get();

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentUserId = Auth::id();
        // Lista dei piatti del ristorante loggato
        $dishes = Dish::where('user_id', '=', $currentUserId)->get();
        $dishcategoriesArray = [];

        // Pusho solo le categorie dei piatti che possiede il ristorante
        foreach ($dishes as $dish) {
            if (!in_array($dish['dishcategory_id'], $dishcategoriesArray)) {
                array_push($dishcategoriesArray, $dish['dishcategory_id']);
            }
        }

        $dishcategories = Dishcategory::whereIn('id', $dishcategoriesArray)->get();
        return view('admin.orders.create', compact('dishes', 'dishcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'customer_name' => 'required',
                'customer_lastname' => 'required',
                'customer_address' => 'required',
                'customer_phone' => 'required | numeric',
                'completed' => 'required',
                'payment_received' => 'required',
            ],
            [
                'customer_name.required' => 'Il campo "Nome" è obbligatorio',
                'customer_lastname.required' => 'Il campo "Cognome" è obbligatorio',
                'customer_address.required' => 'Il campo "Indirizzo" è obbligatorio',
                'customer_phone.required' => 'Il campo "Numero di telefono" è obbligatorio',
                'customer_phone.numeric' => 'Il campo "Numero di telefono" deve essere composto solamente da numeri',
                'completed.required' => 'Il campo "Ordine completato" è obbligatorio',
                'payment_received.required' => 'Il campo "Pagamento ricevuto" è obbligatorio',
            ]
        );

        $data = $request->all();
        $currentUserId = Auth::id();
        // Array che contiente i singoli prezzi dei dish selezionati
        $pricesDish = [];
        // Array con le quantità selezionate
        $quantities = $data['quantity'];
        // Prezzo totale
        $totalPrice = 0;

        // Riempio l'array con i prezzi desiderati
        foreach ($data['dishes'] as $key => $dish){
            $new_price = Dish::where('id', '=', $dish)->get();
            array_push($pricesDish, $new_price[0]['price']);
        }        

        // Calcolo il prezzo totale dell'ordine
        for($i = 0; $i < count($quantities); $i++){
            $totalPrice += $quantities[$i] * $pricesDish[$i];
        }

        $new_order = new Order();
        $new_order->fill($data);
        // Assegno l'id del ristorante loggato
        $new_order->user_id = $currentUserId;
        // Assegno il prezzo totale calcolato precedentemente
        $new_order->total_price = $totalPrice;
        $new_order->save();

        // Scrivo sulla tabella ponte dish_order
        if (array_key_exists('dishes', $data)) {
            foreach ($data['dishes'] as $key => $dish) {
                DB::table('dish_order')->insert(
                    [
                        'dish_id' => $dish,
                        'order_id' => $new_order->id,
                        'quantity' => $quantities[$key]
                    ]
                );
            }
        };

        return redirect()->route('admin.orders.show', $new_order)->with('message-create', "$new_order->customer_name");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $currentUserId = Auth::id();
        // Lista dei piatti del ristorante loggato
        $dishes = Dish::where('user_id', '=', $currentUserId)->get();
        $dishcategoriesArray = [];

        // Pusho solo le categorie dei piatti che possiede il ristorante
        foreach ($dishes as $dish) {
            if (!in_array($dish['dishcategory_id'], $dishcategoriesArray)) {
                array_push($dishcategoriesArray, $dish['dishcategory_id']);
            }
        }

        $dishcategories = Dishcategory::whereIn('id', $dishcategoriesArray)->get();

        // Array con lista dei piatti dell'ordine
        $dishesChecked = $order->Dishesorder->pluck('id')->toArray();

        // dd($order->Dishesorder[0]->pivot->quantity);

        return view('admin.orders.edit', compact('order', 'dishes', 'dishcategories', 'dishesChecked'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index', compact('order'))->with('message-delete', "$order->costumer_name");
    }
}
