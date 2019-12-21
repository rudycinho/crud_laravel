<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name'      => 'Edson',
            'last_name' => 'Marquez',
            'address'   => 'South 34',
            'birth_date'=> '1991-02-01',
            'phone'     => '5632567',
            'email'     => 'edson_marquez34@gmail.com'
        ]);
        Client::create([
            'name'      => 'Arturo',
            'last_name' => 'Siles',
            'address'   => 'North 56',
            'birth_date'=> '1979-03-01',
            'phone'     => '5677673',
            'email'     => 'arthy_sid@gmail.com'
        ]);
        Client::create([
            'name'      => 'Jaime Edgar',
            'last_name' => 'Telleria',
            'address'   => 'East 45',
            'birth_date'=> '1990-10-23',
            'phone'     => '2346674',
            'email'     => 'jaime4564@gmail.com'
        ]);
        Client::create([
            'name'      => 'Angel',
            'last_name' => 'Antezana',
            'address'   => 'West 5',
            'birth_date'=> '1987-05-21',
            'phone'     => '2345675',
            'email'     => 'angel_antezana45@gmail.com'
        ]);
        Client::create([
            'name'      => 'Mauricio',
            'last_name' => 'Oporto',
            'address'   => 'South 3',
            'birth_date'=> '1993-09-20',
            'phone'     => '4442324',
            'email'     => 'op_mauricio@gmail.com'
        ]);

    }
}
