<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(Request $request, $slug_product){
        return view('frontend.pages.detail_product');
    }

    public function cart(){
        return view('frontend.pages.cart');
    }
    public function payment(){
        return view('frontend.pages.payment');
    }

}
