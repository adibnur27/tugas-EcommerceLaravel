<?php

use App\Http\Controllers\mainPageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});
Route::get('mainpage',[mainPageController::class, 'index']);

Route::get('/products', function () {
    return view('products');
});
Route::get('product',[ProductsController::class, 'index']);

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
