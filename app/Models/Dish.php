<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['user_id', 'name', 'quantity', 'ingredients', 'available', 'price', 'description', 'dishcategory_id'];

    public function UserDishes()
    {
        return $this->belongsTo('App\User');
    }

    public function Dishcategory()
    {
        return $this->belongsTo('App\Models\Dishcategory');
    }
}
