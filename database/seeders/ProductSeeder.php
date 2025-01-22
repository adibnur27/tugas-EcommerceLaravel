<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'image' => 'iPhone_15_Pro_Blue.webp',
                'name' => 'iPhone 15 Pro',
                'description' => 'Kini dengan Titanium.',
                'price' => 18999000,
                'stock' => 12,
                'category_id' => 1
            ],
            [
                'image' => 'iPhone_15_pink.jpg',
                'name' => 'iPhone 15',
                'description' => 'Keseruan baru. ',
                'price' => 14249000,
                'stock' => 12,
                'category_id' => 1
            ]
        ];
        foreach ($products as $product) {
            product::create($product);
        }
    }
}
