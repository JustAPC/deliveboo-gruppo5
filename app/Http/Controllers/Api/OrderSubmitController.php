<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderSubmitController extends Controller
{
    public function orderSubmit(Request $request)
    {
        $order = new Order();
        $order->user_id = $request['user_id'];
        $order->customer_name = $request['customer_name'];
        $order->customer_lastname = $request['customer_lastname'];
        $order->customer_address = $request['customer_address'];
        $order->completed = $request['completed'];
        $order->payment_received = 1;
        $order->total_price = $request['total_price'];
        $order->customer_phone = $request['customer_phone'];

        $order->save();
        foreach ($request['piatti'] as $key => $item) {
            DB::table('dish_order')->insert(
                [
                    'dish_id' => $item['dish_id'],
                    'order_id' => $order->id,
                    'quantity' => $item['quantity'],
                ]
            );
        };

        return response()->json($order);
    }
}
