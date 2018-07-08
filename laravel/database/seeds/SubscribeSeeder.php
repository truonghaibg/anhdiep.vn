<?php

use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcribes')->insert(
            [
                'id' => 1,
                'email' => str_random(5).'@gmail.com',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 2,
                'email' => str_random(5).'@gmail.com',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 3,
                'email' => str_random(5).'@gmail.com',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 4,
                'email' => str_random(5).'@gmail.com',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 5,
                'email' => str_random(5).'@gmail.com',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ]

        );
    }
}
