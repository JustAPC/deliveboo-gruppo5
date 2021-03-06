<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'phone_number', 
        'address', 
        'city', 
        'state', 
        'zip', 
        'vat',
        'restaurant_name',
        'restaurant_img',
        'type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Openingdays()
    {
        return $this->hasMany('App\Models\Openingday');
    }

    public function Orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function Dishes()
    {
        return $this->hasMany('App\Models\Dish');
    }

    public function UsersType()
    {
        return $this->belongsToMany('App\Models\Type')
            ->withPivot('type_id', 'user_id');
    }
}
