<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'id' => 1,
                'role_id' => 1,
                'username' => 'admin',
                'password' => md5('admin'),
                'email' => 'truonghaibg@gmail.com',
                'full_name' => 'Hai Truong Cong',
                'gender_id' => 1,
                'created_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => 1,
                'role_id' => 2,
                'username' => 'user',
                'password' => md5('user'),
                'email' => 'truonghaibg@gmail.com',
                'full_name' => 'Hai Truong Cong',
                'gender_id' => 2,
                'created_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
