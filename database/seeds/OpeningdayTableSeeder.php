<?php

use Illuminate\Database\Seeder;
use App\Models\Openingday;
use Faker\Generator as Faker;

class OpeningdayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $listDays = [
            'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato', 'Domenica'
        ];

        for ($i = 1; $i < 11; $i++) {

            foreach ($listDays as $day) {
                $opening = $faker->numberBetween(10, 12);
                $closing = $faker->numberBetween(22, 24);

                $openingday = new Openingday();
                $openingday->day = $day;
                $openingday->opening_hour = $opening . ':00:00';
                $openingday->closing_hour = $closing . ':00:00';
                $openingday->save();
            }
        }
    }
}
