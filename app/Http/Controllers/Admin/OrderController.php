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
        $dishes = Dish::where('user_id', '=', $currentUserId)->get();
        $dishcategoriesArray = [];

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
        
        // Creo un array di quantità private di tutti i null
        $quantities = $data['quantity'];
        foreach($quantities as $key => $quantity){
            if($quantity == 'null'){
                unset($quantities[$key]);
            }
        }
        $quantities = array_values($quantities);

        $new_order = new Order();
        $new_order->fill($data);
        $new_order->user_id = $currentUserId;
        $new_order->save();

        if (array_key_exists('dishes', $data)) {

            foreach($data['dishes'] as $key => $dish) {
                DB::table('dish_order')->insert(
                    [
                        'dish_id' => $dish,
                        'order_id'=> $new_order->id,
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
        return view('admin.orders.edit', compact('order'));
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
