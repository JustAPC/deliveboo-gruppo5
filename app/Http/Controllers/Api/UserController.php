<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Type;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $parameters = $request->query('type');

        if ($parameters) {
            $restaurants = User::with(['UsersType'])->whereHas('UsersType', function ($q) use ($parameters) {
                $q->whereIn('type_user.type_id', $parameters);
            })->get();

            return response()->json(['restaurant' => $restaurants, 'success' => true]);
        }

        $restaurants = User::with(['UsersType'])->get();
        $types = Type::all();

        return response()->json(['restaurants' => $restaurants, 'types' => $types, 'success' => true,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();

        return view('register', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = User::with(['UsersType'])->where('id', $id)->first();

        $dishes = $restaurant->Dishes()->where('available', 1)->get();

        return response()->json(['restaurant' => $restaurant, 'dishes' => $dishes, 'success' => true,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
