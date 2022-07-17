<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'numeric', 'digits_between:9,10'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zip' => ['required', 'numeric', 'digits:5'],
            'vat' => ['required', 'numeric', 'digits:11'],
            'types' => ['required'],
            'restaurant_name' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (Str::startsWith($data['restaurant_img'], 'http')) {
            $img_url = $data['restaurant_img'];
            $data['restaurant_img'] = $img_url;
        } else {
            $img_stored = Storage::put('restaurant_images', $data['restaurant_img']);
            $data['restaurant_img'] = $img_stored;
        }

        $new_user = User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'zip' => $data['zip'],
                'vat' => $data['vat'],
                'restaurant_name' => $data['restaurant_name'],
                'restaurant_img' => $data['restaurant_img'],
                'password' => Hash::make($data['password']),
            ]
        );

        // Ultimo id dello user creata
        $lastId = DB::table('users')->latest()->first()->id;
        // Scrivo nella pivot type_user ed associa i tipi selezionati al nuovo ristorante
        foreach ($data['types'] as $key => $type) {
            DB::table('type_user')->insert(
                [
                    'user_id' => $lastId,
                    'type_id' => $type,
                ]
            );
        }

        $this->redirectTo = '/admin';

        return $new_user;
    }
}
