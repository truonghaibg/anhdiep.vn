<?php

use Illuminate\Database\Seeder;
use DB;

class NewsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_news_types')->insert(
            [
                'id' => 1,
                'name' => 'news',
                'description' => 'news',
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'info',
                'description' => 'info',
                'created_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
