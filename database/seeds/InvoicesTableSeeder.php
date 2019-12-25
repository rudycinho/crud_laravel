<?php

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'date'           => '2019-06-02',
            'client_id'      => '1',
            'payment_mode_id'=> '1'
        ]);

        Invoice::create([
            'date'           => '2019-02-17',
            'client_id'      => '1',
            'payment_mode_id'=> '2'
        ]);
    
        Invoice::create([
            'date'           => '2019-03-02',
            'client_id'      => '1',
            'payment_mode_id'=> '1'
        ]);

        Invoice::create([
            'date'           => '2019-07-22',
            'client_id'      => '2',
            'payment_mode_id'=> '1'
        ]);
        
        Invoice::create([
            'date'           => '2019-06-13',
            'client_id'      => '2',
            'payment_mode_id'=> '2'
        ]);

        Invoice::create([
            'date'           => '2019-12-02',
            'client_id'      => '3',
            'payment_mode_id'=> '2'
        ]);

        Invoice::create([
            'date'           => '2019-09-20',
            'client_id'      => '4',
            'payment_mode_id'=> '2'
        ]);
        
        Invoice::create([
            'date'           => '2019-08-12',
            'client_id'      => '5',
            'payment_mode_id'=> '1'
        ]);
    }
}
