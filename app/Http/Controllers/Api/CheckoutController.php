<?php

namespace App\Http\Controllers\Api;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'quantity' => 'required',
            ],
            [
                'customer_name.required' => 'Il campo "Nome" è obbligatorio',
                'customer_lastname.required' => 'Il campo "Cognome" è obbligatorio',
                'customer_address.required' => 'Il campo "Indirizzo" è obbligatorio',
                'customer_phone.required' => 'Il campo "Numero di telefono" è obbligatorio',
                'customer_phone.numeric' => 'Il campo "Numero di telefono" deve essere composto solamente da numeri',
                'completed.required' => 'Il campo "Ordine completato" è obbligatorio',
                'payment_received.required' => 'Il campo "Pagamento ricevuto" è obbligatorio',
                'quantity.required' => 'É necessario selezionare almeno un piatto',
            ]
        );

        
        foreach($data as $value) {

            $order = new Order();

            $order->fill($value);

            $order->total_price = $total;

            $order->save();

            }
            
            return response()->json([
                'order' => $order,
                'success' => true,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
