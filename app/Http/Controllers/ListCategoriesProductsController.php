<?php

use App\Http\Controllers\Controller;

class ListCategoriesProductsController extends Controller
{
    public function index() {
        return view('listcategoriesproducts');
    }
}