<?php

namespace App\Http\Controllers\Frontend;

use Backpack\PageManager\app\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function show(Request $request, $slug_article){
        $article = Page::where('slug',$slug_article)->first();
        $articles = Page::where('slug','!=',$slug_article)->get();
        return view('frontend.pages.blog',compact('article','articles'));
    }
}
