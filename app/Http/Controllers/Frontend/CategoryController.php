<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Request $request, $slug){
        $category = Category::with('products')->where('slug',$slug)->first();
        $products_builder = Product::with('category')->where('category_id',$category->id);
        $trademark = $request->get('trademark');
        if (!empty($trademark)){
            $products_builder = $products_builder->where('trademark',$trademark);
        }
        $price = $request->get('price');
        if (!empty($price)){
            $products_builder = $products_builder->where('price',$price);
        }
        $order = $request->get('order');
        if (!empty($order)){
            $products_builder = $products_builder->orderBy('price',$order);
        }
        $products = $products_builder->get();
        $products_hsx = Product::with('category')->where('category_id',$category->id)->groupBy('trademark')->pluck('trademark');
        $products_price = Product::with('category')->where('category_id',$category->id)->orderBy('price','asc')->groupBy('price')->pluck('price');
//        dd($products_price);
        $search = [
            'trademark' => $trademark,
            'price' => $price,
            'order' => $order
        ];
        return view('frontend.pages.category',compact(
            'category',
            'products',
            'search',
            'products_hsx',
            'products_price'
        ));
    }
}
