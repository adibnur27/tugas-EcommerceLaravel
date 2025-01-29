<?php

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\mainPageController;



Route::get('/', function () {
    return view('mainpage', ['title' => 'Home']);
});
Route::get('mainpage',[mainPageController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{product:slug}', function(Product $product){


        return view('product', ['title' => 'Display prduct','product' => $product ]);
});

Route::get('/cart', function () {
    return view('cart', ['title' => 'Cart']);
});
Route::get('/checkout', function () {
    return view('checkout', ['title' => 'Checkout']);
});
