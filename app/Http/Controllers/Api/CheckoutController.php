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
        $request->validate([
            'form.customer_name' => 'required|string|max:30',
            'form.customer_lastname' => 'required|string|max:50',
            'form.customer_address' => 'required|email|max:50',
            'form.completed' => 'required|boolean',
            'form.payment_received' => 'required|boolean',
            'form.total_price' => 'required|string|max:10',
            'form.customer_phone' => 'required|string|max:30',

        ]);

        
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
