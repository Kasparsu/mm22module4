<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function mail(){
        Mail::to('kasparsu@gmail.com')->send(new ContactUs(
            request()->input('subject'),
            request()->input('email'),
            request()->input('message'),
            request()->input('name')
        ));
        return redirect()->back()->with('success', 'Mail was sent successfully!');
    }
}
