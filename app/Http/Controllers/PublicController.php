<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $products = Product::take(4)->get();
        return view('pages.index', compact('products'));
    }

    public function shop(){
        $products = Product::all();
        return view('pages.shop', compact('products'));
    }

    public function product(Product $product){
        return view('pages.detail', compact('product'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
