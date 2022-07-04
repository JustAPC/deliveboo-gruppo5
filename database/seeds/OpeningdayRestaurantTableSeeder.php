<?php

use Illuminate\Database\Seeder;

class OpeningdayRestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('openingday_restaurant')->insert(
                [
                    'openingday_id' => 1,
                    'restaurant_id' => $i,
                ],
            );

            DB::table('openingday_restaurant')->insert(
                [
                    'openingday_id' => 2,
                    'restaurant_id' => $i,
                ],
            );

            DB::table('openingday_restaurant')->insert(
                [
                    'openingday_id' => 3,
                    'restaurant_id' => $i,
                ],
            );

            DB::table('openingday_restaurant')->insert(
                [
                    'openingday_id' => 4,
                    'restaurant_id' => $i,
                ],
            );

            DB::table('openingday_restaurant')->insert(
                [
                    'openingday_id' => 5,
                    'restaurant_id' => $i,
                ],
            );

            DB::table('openingday_restaurant')->insert(
                [
                    'openingday_id' => 6,
                    'restaurant_id' => $i,
                ],
            );
        }
    }
}
