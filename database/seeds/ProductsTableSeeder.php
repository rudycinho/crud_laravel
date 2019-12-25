<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'        => 'Table',
            'price'       => 456.76,
            'stock'       => 15,
            'category_id' => 2
        ]);
    
        Product::create([
            'name'        => 'Chair',
            'price'       => 46.12,
            'stock'       => 30,
            'category_id' => 2
        ]);

        Product::create([
            'name'        => 'Desk',
            'price'       => 424,
            'stock'       => 100,
            'category_id' => 2
        ]);
    
        Product::create([
            'name'        => 'Armchair',
            'price'       => 200,
            'stock'       => 0,
            'category_id' => 2
        ]);

        Product::create([
            'name'        => 'Dinosaur',
            'price'       => 43,
            'stock'       => 10,
            'category_id' => 1
        ]);
    
        Product::create([
            'name'        => 'Arduino',
            'price'       => 50,
            'stock'       => 20,
            'category_id' => 4
        ]);

        Product::create([
            'name'        => 'Raspberry Pi',
            'price'       => 350,
            'stock'       => 4,
            'category_id' => 4
        ]);
    
        Product::create([
            'name'        => 'Apple',
            'price'       => 20,
            'stock'       => 100,
            'category_id' => 3
        ]);
    }
}
