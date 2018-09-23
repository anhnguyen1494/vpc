<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();
        return view('frontend.pages.home',compact('categories'));
    }
}
