<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function Restaurants()
    {
        return $this->belongsToMany('App\Models\Restaurant');
    }
}
