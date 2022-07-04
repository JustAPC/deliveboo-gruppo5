<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Dishcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Dishcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUserId = Auth::user()->id;

        if ($request->has('name')) {
            $name = $request->query('name');

            $dishes = Dish::where([
                ['name', 'like', '%' . $name . '%'],
                ['user_id', '=', $currentUserId],
            ])->get();
        } else {
            $dishes = Dish::where('user_id', '=', $currentUserId)->get();
        }

        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dishcategories = Dishcategory::all();

        return view('admin.dishes.create', compact('dishcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'ingredients' => 'required',
                'available' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Il campo "Nome del piatto" è obbligatorio',
                'ingredients.required' => 'Il campo "Ingredienti" è obbligatorio',
                'available.required' => 'Il campo "Disponibilità" è obbligatorio',
                'price.required' => 'Il campo "Prezzo" è obbligatorio',
            ]
        );

        $data = $request->all();
        $currentUserId = Auth::id();

        $new_dish = new Dish();
        if (Str::startsWith($data['image'], 'dish_images')) {
            if (array_key_exists('image', $data)) {
                $image_url = Storage::put('dish_images', $data['image']);
                $data['image'] = $image_url;
            }
        }
        $new_dish->fill($data);
        $new_dish->user_id = $currentUserId;
        $new_dish->image = $data['image'];
        $new_dish->save();

        return redirect()->route('admin.dishes.show', $new_dish)->with('message-create', "$new_dish->name");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $dishcategories = Dishcategory::all();

        return view('admin.dishes.edit', compact('dish', 'dishcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate(
            [
                'name' => 'required',
                'ingredients' => 'required',
                'available' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Il campo "Nome del piatto" è obbligatorio',
                'ingredients.required' => 'Il campo "Ingredienti" è obbligatorio',
                'available.required' => 'Il campo "Disponibilità" è obbligatorio',
                'price.required' => 'Il campo "Prezzo" è obbligatorio',
            ]
        );

        $data = $request->all();
        dd($data);
        if (array_key_exists('image', $data)) {
            if ($dish->image != null) Storage::delete($dish->image);

            $image_url = Storage::put('dish_images', $data['image']);
            $data['image'] = $image_url;
            $dish->image = $data['image'];
        }
        $dish->update($data);


        return redirect()->route('admin.dishes.show', $dish)->with('message-update', "$dish->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.dishes.index', compact('dish'))->with('message-delete', "$dish->name");
    }
}
