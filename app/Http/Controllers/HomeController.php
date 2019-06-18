<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')->get();
        $categories = Category::get();

        return view('home', ['products' => $products, 'categories' => $categories]);
    }
}
