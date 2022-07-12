<?php

namespace App\Http\Controllers\Api;

use Braintree\Gateway;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gateway = new \Braintree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => '456xjr3ymrw8q5r4',
            'publicKey' => 'mhfc7b2xkqctzsfd',
            'privateKey' => '8b56272ae0e2f8f12d16eaad7275ed6e'
        ]);
        $clientToken = $gateway->clientToken()->generate([]);

        return response()->json([
            'token' => $clientToken,
            'succes' => true
        ]);
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
        $data = $request->all();

        $order = $data['order'];

        $cart = $data['cart'];

        $restaurantSlug = $data['restaurant'];

        //return $restaurantSlug;

        $restaurant = Restaurant::with('user')
            ->where('slug', $restaurantSlug)
            ->first();

        $user = $restaurant->user;

        $userEmail = $restaurant->user->email;

        //return $user;

        $tokenNonce = $request->query('token');
        $total = $data['total'];
        //return $total;

        $gateway = new \Braintree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => '456xjr3ymrw8q5r4',
            'publicKey' => 'mhfc7b2xkqctzsfd',
            'privateKey' => '8b56272ae0e2f8f12d16eaad7275ed6e'
        ]);

        $result = $gateway->transaction()->sale([
            'amount' => $total,
            'paymentMethodNonce' => $tokenNonce,
            'options' => [
                'submitForSettlement' => true,
            ]
        ]);


        if ($result->success) {
            // See $result->transaction for details
            return $result->transaction;
        } else {
            return $result->transaction;
        }
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
