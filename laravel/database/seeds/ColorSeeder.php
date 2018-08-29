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
        ],
        [
            'id' => 2,
            'name' => 'Đỏ',
            'description' => 'Đỏ',
            'image' => '',
        ],
        [
            'id' => 3,
            'name' => 'Trắng',
            'description' => 'Trắng',
            'image' => '',
        ],
        [
            'id' => 4,
            'name' => 'Hồng',
            'description' => 'Hồng',
            'image' => '',
        ],
        [
            'id' => 5,
            'name' => 'Đen',
            'description' => 'Đen',
            'image' => '',
        ]);
    }
}
