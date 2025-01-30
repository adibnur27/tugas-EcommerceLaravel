<?php

namespace App\Http\Controllers;

use App\Models\Category; // Pastikan model Category di-import
use Illuminate\Http\Request;

class ListCategoryProductsController extends Controller
{
    public function index()
    {
        // Mengambil semua kategori dari database
        $categories = Category::with('products')->get(); 
        
        // Mengirim data ke view
        return view('listcategoriesproducts', compact('categories'));
    }
}
