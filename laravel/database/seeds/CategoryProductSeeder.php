<?php

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('')->insert(
            [
                'id' => '1',
                'parent_id' => '',
                'category_product_type_id' => '1',
                'name' => 'Thời trang nam',
                'slug' => 'thoi-trang-nam',
                'description' => 'Thời trang nam',
                'image' => '',
                'meta_keywords' => 'Thời trang nam',
                'meta_description' => 'Thời trang nam',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '2',
                'parent_id' => '',
                'category_product_type_id' => '1',
                'name' => 'Thời trang nữ',
                'slug' => 'thoi-trang-nu',
                'description' => 'Thời trang nữ',
                'image' => '',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '3',
                'parent_id' => '',
                'category_product_type_id' => '1',
                'name' => 'Thời trang nữ',
                'slug' => 'thoi-trang-nu',
                'description' => 'Thời trang nữ',
                'image' => '',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
