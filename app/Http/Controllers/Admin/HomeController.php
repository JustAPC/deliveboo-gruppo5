<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }
}
