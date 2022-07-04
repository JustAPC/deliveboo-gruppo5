<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OpeningdayRestaurant extends Pivot
{
    protected $table = 'openingday_restaurant';

    public function Openingdayspivot()
    {
        return $this->belongsTo('App\Models\Openingday');
    }

    public function Restaurantspivot()
    {
        return $this->belongsTo('App\User');
    }
}
