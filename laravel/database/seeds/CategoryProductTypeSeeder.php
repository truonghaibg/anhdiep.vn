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
                'meta_keywords' => 'Sản phẩm',
                'meta_description' => 'Sản phẩm',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '2',
                'slug' => 'thiet-ke',
                'name' => 'Thiết kế',
                'meta_keywords' => 'Thiết kế',
                'meta_description' => 'Thiết kế',
                'created_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
