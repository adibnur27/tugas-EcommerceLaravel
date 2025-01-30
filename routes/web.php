<?php

use App\Models\Product;
use App\Models\ListProduct;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\List_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\mainPageController;
use App\Http\Controllers\ListProductsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
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
Route::get('/listproducts', function () {
    return view('listproducts', ['title' => 'List Products']);
});

Route::get('/listproducts', [ListProductsController::class, 'index']);


Route::get('/listcategoriesproducts', function () {
    return view('listcategoriesproducts', ['title' => 'List Categories Products']);
});
Route::get('/checkout', function () {
    return view('checkout', ['title' => 'Checkout']);
});