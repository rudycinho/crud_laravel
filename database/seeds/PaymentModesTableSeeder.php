<?php

use Illuminate\Database\Seeder;
use App\Models\PaymentMode;

class PaymentModesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMode::create([
            'name'            => 'Credit',
            'another_details' => ''
        ]);

        PaymentMode::create([
            'name'            => 'Debit',
            'another_details' => ''
        ]);
    }
}
