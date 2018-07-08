<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert(
            [
                'id' => 1,
                'name' => 'male',
                'description' => 'male',
                'meta_keywords' => 'male',
                'meta_description' => 'male',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'female',
                'description' => 'female',
                'meta_keywords' => 'female',
                'meta_description' => 'female',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'other',
                'description' => 'other',
                'meta_keywords' => 'other',
                'meta_description' => 'other',
                'created_at' => \Carbon\Carbon::now(),
            ]
        );
    }
}
