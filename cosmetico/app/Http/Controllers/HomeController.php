<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class HomeController extends Controller
{
    
    public function index() {
        $products = Product::orderBy('id', 'DESC')->get();
         
        return view('home')->with('products', $products); 
    }
}
