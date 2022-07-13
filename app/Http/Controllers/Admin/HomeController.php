<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Dish;
use App\Models\Dishcategory;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $user = Auth::user();


        $currentUserId = Auth::user()->id;
        
        
        $dishes = Dish::where('user_id', '=', $currentUserId)->get();
        
        $orders = Order::orderBy('updated_at', 'DESC')->where('user_id', '=', $currentUserId)->get();



        return view('admin.home', compact('user', 'dishes', 'orders'));
    }
}
