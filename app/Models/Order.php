<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_lastname',
        'customer_address',
        'customer_phone',
        'total_price',
        'completed',
        'payment_received'
    ];

    public function RestaurantOrder()
    {
        return $this->belongsTo('App\User');
    }
}
