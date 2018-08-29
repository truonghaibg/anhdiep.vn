<?php

use Illuminate\Database\Seeder;

class CategoryProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product_types')->insert(
            [
                'id' => '1',
                'slug' => 'san-pham',
                'name' => 'sản phẩm',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '2',
                'slug' => 'thiet-ke',
                'name' => 'Thiết kế',
                'created_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
