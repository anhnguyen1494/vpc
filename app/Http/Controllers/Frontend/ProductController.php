<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(Request $request, $slug_product){
        $product = Product::with('category')->where('slug',$slug_product)->first();
        $cate = $product->category;
        return view('frontend.pages.detail_product',compact('product','cate'));
    }

    public function cart(){
        $cart = Cart::content();
        $total_cart = Cart::total();
        return view('frontend.pages.cart',compact('cart','total_cart'));
    }

    public function addCart(Request $request){
        $data = $request->except('_token');
        Cart::add($data['id'],$data['name'],$data['qty'],$data['price'],[
            'image' => $data['image'],
            'slug' => $data['slug'],
            'code_pro' => $data['code_pro']
        ]);
        session()->flash('success','Thêm giỏ hàng thành công');
        return redirect()->route('product.cart');
    }

    public function buyNow(Request $request){
        $data = $request->except('_token');
        Cart::add($data['id'],$data['name'],$data['qty'],$data['price'],[
            'image' => $data['image'],
            'slug' => $data['slug'],
            'code_pro' => $data['code_pro']
        ]);
        return redirect()->route('payment');
    }

    public function updateCart(Request $request){
        $cart = $request->get('cart');
        foreach ($cart as $rowid => $product){
            Cart::update($rowid,$product['qty']);
        }
        session()->flash('success','Cập nhật giỏ hàng thành công');
        return back();
    }

    public function removeCart(Request $request, $rowId){
        $prod = Cart::get($rowId);
        Cart::remove($rowId);
        session()->flash('success','Đã xóa '.$prod->name.' khỏi giỏ hàng');
        return back();
    }
    public function destroyCart(){
        Cart::destroy();
        session()->flash('success','Xóa giỏ hàng thành công');
        return back();
    }

    public function payment(){
        $cart = Cart::content();
        $total_cart = Cart::total();
        $address = config('address');
        return view('frontend.pages.payment',compact('cart','total_cart','address'));
    }
    public function pickCity(Request $request){
        $city = $request->get('city');
        $address = config('address');

        return response()->json(['cities' => $address[$city]['cities']]);
    }
    public function searchAjax(Request $request){
        $keyword = $request->get('keyword');
        $products = Product::with('category')->where('name','like','%'.$keyword.'%')->get();
        return response()->json(['message' => $products]);
    }
}
