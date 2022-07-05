<?php

use Illuminate\Database\Seeder;
use App\Models\Type;
use App\User;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert(
            [
                'user_id' => 1,
                'type_id' => 5,
            ],
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 1,
                'type_id' => 6,
            ],
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 2,
                'type_id' => 5,
            ],
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 2,
                'type_id' => 6,
            ],
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 3,
                'type_id' => 3,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 4,
                'type_id' => 10,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 5,
                'type_id' => 3,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 6,
                'type_id' => 3,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 7,
                'type_id' => 1,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 8,
                'type_id' => 1,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 9,
                'type_id' => 3,
            ]
        );
        DB::table('user_type')->insert(
            [
                'user_id' => 10,
                'type_id' => 9,
            ]
        );
    }
}
