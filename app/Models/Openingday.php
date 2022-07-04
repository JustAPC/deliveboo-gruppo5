<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Openingday extends Model
{
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsToMany('App\User');
    }
}
