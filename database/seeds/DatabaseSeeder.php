<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            OpeningdayTableSeeder::class,
            TypesTableSeeder::class,
            OrdersTableSeeder::class,
            DishcategoriesTableSeeder::class,
            DishesTableSeeder::class,
            RestaurantTypeTableSeeder::class,
            OpeningdayRestaurantTableSeeder::class
        ]);
    }
}
