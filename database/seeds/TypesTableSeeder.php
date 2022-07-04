<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->name = 'Pizzeria';
        $type->save();

        $type = new Type();
        $type->name = 'Hamburger';
        $type->save();

        $type = new Type();
        $type->name = 'Italiano';
        $type->save();

        $type = new Type();
        $type->name = 'Messicano';
        $type->save();

        $type = new Type();
        $type->name = 'Giapponese';
        $type->save();

        $type = new Type();
        $type->name = 'Cinese';
        $type->save();

        $type = new Type();
        $type->name = 'Thailandese';
        $type->save();

        $type = new Type();
        $type->name = 'Etiope';
        $type->save();

        $type = new Type();
        $type->name = 'Americano';
        $type->save();

        $type = new Type();
        $type->name = 'Pasticceria';
        $type->save();

        $type = new Type();
        $type->name = 'Vegetariano';
        $type->save();

        $type = new Type();
        $type->name = 'Steak House';
        $type->save();
    }
}
