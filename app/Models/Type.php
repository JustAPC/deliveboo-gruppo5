<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function TypeUsers()
    {
        return $this->belongsToMany('App\User');
    }
}
