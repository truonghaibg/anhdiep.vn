<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert(
            [
                'id' => 1,
                'name' => 'S',
                'description' => 'S',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'M',
                'description' => 'M',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'L',
                'description' => 'L',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'XL',
                'description' => 'XL',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 5,
                'name' => 'other',
                'description' => 'other',
                'created_at' => \Carbon\Carbon::now(),
            ]
        );
    }
}
