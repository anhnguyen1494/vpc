<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use Backpack\PageManager\app\Models\Page;
use Backpack\Settings\app\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $categories = Category::with('products')->orderBy('order')->get();
        $pages = Page::all();
        return view('frontend.pages.home',compact('categories','pages'));
    }
}
