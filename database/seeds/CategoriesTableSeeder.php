<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'        => 'Toys', 
            'description' => 'An object for a child to play with, typically a model or miniature replica of something.'
        ]);
        Category::create([
            'name'        => 'Furniture', 
            'description' => 'Large movable equipment, used to make a house, office, or other space suitable for living or working.'
        ]);
        Category::create([
            'name'        => 'Foods', 
            'description' => 'Any nutritious substance that people eat or drink, in order to maintain life and growth'
        ]);
        Category::create([
            'name'        => 'Electronics', 
            'description' => 'Electronics Devices'
        ]);
    }
}
