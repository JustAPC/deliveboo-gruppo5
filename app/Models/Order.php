<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function RestaurantOrder()
    {
        return $this->belongsTo('App\User');
    }
}
