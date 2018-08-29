<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuTypeSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(ColorSeeder::class);
        //$this->call(NewsTypeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
