<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'admin',
            'description' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
        ],
        [
            'id' => 2,
            'name' => 'customer',
            'description' => 'customer',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
