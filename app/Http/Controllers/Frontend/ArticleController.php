<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        //
    }

    public function category(Request $request, $slug_cate){
        $cate = CategoryBlog::with('articles')->where('slug',$slug_cate)->first();
        $articles = Article::with('category')->where('category_id',$cate->id)->paginate(6);
        $cate_all = CategoryBlog::all();
        return view('frontend.pages.cate_blog',compact('cate','cate_all','articles'));
    }

    public function show(Request $request, $slug_cate, $slug_article){
        $cate = CategoryBlog::where('slug',$slug_cate)->first();
        $article = Article::where('slug',$slug_article)->first();
        $articles = Article::where('category_id',$cate->id)->where('slug','!=',$slug_article)->get();
        return view('frontend.pages.blog',compact('article','articles','cate'));
    }
}
