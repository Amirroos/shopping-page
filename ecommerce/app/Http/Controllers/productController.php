<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function allproduct(){
        $products = Product::all();
        return view('admin.products.all-products')->with('products',$products);
    }
    public function createproduct(){
        $categories = Category::all();

        return view('admin.products.create-product')->with('category',$categories);
    }
}
