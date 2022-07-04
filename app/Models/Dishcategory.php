<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dishcategory extends Model
{

    public function Categorydish()
    {
        return $this->hasMany('App\Models\Dish');
    }
}
