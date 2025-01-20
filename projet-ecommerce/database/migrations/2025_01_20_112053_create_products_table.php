<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 19.99,
            'stock' => 100,
            'image' => 'path/to/image1.jpg',
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 29.99,
            'stock' => 50,
            'image' => 'path/to/image2.jpg',
        ]);
    }
}
