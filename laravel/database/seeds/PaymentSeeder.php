<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert(
            [
                'id' => 1,
                'name' => 'Cash on Delivery',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Via Paypal',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
            ]
        );
    }
}
