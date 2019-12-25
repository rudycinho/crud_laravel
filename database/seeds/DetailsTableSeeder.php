<?php

use Illuminate\Database\Seeder;
use App\Models\Detail;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'quantity'  => 20,
            'price'     => 0.56,
            'product_id'=> '1',
            'invoice_id'=> '1'
        ]);
        Detail::create([
            'quantity'  => 15,
            'price'     => 0.76,
            'product_id'=> '2',
            'invoice_id'=> '2'
        ]);
        Detail::create([
            'quantity'  => 30,
            'price'     => 0.75,
            'product_id'=> '3',
            'invoice_id'=> '3'
        ]);
        Detail::create([
            'quantity'  => 25,
            'price'     => 0.34,
            'product_id'=> '4',
            'invoice_id'=> '4'
        ]);
        Detail::create([
            'quantity'  => 10,
            'price'     => 0.52,
            'product_id'=> '5',
            'invoice_id'=> '5'
        ]);
        Detail::create([
            'quantity'  => 60,
            'price'     => 0.23,
            'product_id'=> '6',
            'invoice_id'=> '6'
        ]);
        Detail::create([
            'quantity'  => 50,
            'price'     => 0.54,
            'product_id'=> '7',
            'invoice_id'=> '7'
        ]);
        Detail::create([
            'quantity'  => 20,
            'price'     => 0.21,
            'product_id'=> '8',
            'invoice_id'=> '8'
        ]);
    }
}
