<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ListProduct;
use Illuminate\Http\Request;

class ListProductsController extends Controller
{
    public function index() {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('listproducts', compact('products')); // Mengirim data ke view
    }
}
