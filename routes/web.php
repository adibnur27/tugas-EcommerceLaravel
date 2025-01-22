<?php

use App\Http\Controllers\mainPageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage', ['title' => 'Home']);
});
Route::get('mainpage',[mainPageController::class, 'index']);

Route::get('/products', function () {
    return view('products', ['title' => 'Products', 'products' => [
        [
            'image' => 'iPhone_15_Pro_Blue.webp',
            'name' => 'iPhone 15 Pro',
            'description' => 'Kini dengan Titanium Mulai dari Rp',
            'price' => '18.999.000'
        ],
        [
            'image' => 'iPhone_15_pink.jpg',
            'name' => 'iPhone 15',
            'description' => 'Keseruan baru. Mulai Dari Rp',
            'price' => '14.249.000'
        ]
    ]]);
});
Route::get('product',[ProductsController::class, 'index']);

Route::get('/cart', function () {
    return view('cart', ['title' => 'Cart']);
});
Route::get('/checkout', function () {
    return view('checkout', ['title' => 'Checkout']);
});
