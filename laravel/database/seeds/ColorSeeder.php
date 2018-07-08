<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(
        [
            'id' => 1,
            'name' => 'Xanh',
            'description' => 'Xanh',
            'image' => '',
            'meta_keywords' => 'mau xanh, blue',
            'meta_description' => 'mau xanh, blue',
            'created_at' => \Carbon\Carbon::now(),
        ],
        [
            'id' => 2,
            'name' => 'Đỏ',
            'description' => 'Đỏ',
            'image' => '',
            'meta_keywords' => 'mau do, red',
            'meta_description' => 'mau do, red',
            'created_at' => \Carbon\Carbon::now(),
        ],
        [
            'id' => 3,
            'name' => 'Trắng',
            'description' => 'Trắng',
            'image' => '',
            'meta_keywords' => 'mau trang, white',
            'meta_description' => 'mau trang, white',
            'created_at' => \Carbon\Carbon::now(),
        ],
        [
            'id' => 4,
            'name' => 'Hồng',
            'description' => 'Hồng',
            'image' => '',
            'meta_keywords' => 'mau hong, pink',
            'meta_description' => 'mau hong, pink',
            'created_at' => \Carbon\Carbon::now(),
        ],
        [
            'id' => 5,
            'name' => 'Đen',
            'description' => 'Đen',
            'image' => '',
            'meta_keywords' => 'mau den, black',
            'meta_description' => 'mau den, black',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
