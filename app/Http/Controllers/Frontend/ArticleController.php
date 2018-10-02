<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        //
    }
    public function show(Request $request, $slug_article){
        $article = Article::where('slug',$slug_article)->first();
        $articles = Article::where('slug','!=',$slug_article)->get();
        return view('frontend.pages.blog',compact('article','articles'));
    }
}
