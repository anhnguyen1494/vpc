<?php

namespace App\Http\Controllers\Frontend;

use App\Events\OrderSuccessEvent;
use App\Models\Order;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        $cart = Cart::content();
        $order = $this->createOrder($data);
        $this->createOrderDetail($order,$cart);
        Cart::destroy();
//        dd($order,$order->order_details);
        event(new OrderSuccessEvent($order));
        Log::alert('Order: '.$order->id.'-'.$order->name1.' đặt hàng thành công');
//        return redirect()->route('order.success')->with('order',$order);
        return view('frontend.pages.payment_success',compact('order'));
    }

    public function createOrder($data){
        $order = new Order();
        $address = config('address');
        $order->name1 = $data['name1'];
        $order->email1 = $data['email1'];
        $order->phone1 = $data['phone1'];
        $order->address1 = $data['address1'];
        $order->city1 = $data['city1'] != '' ? $address[$data['city1']]['name'] : '';
        $order->district1 = $data['district1'] != '' ? $address[$data['city1']]['cities'][$data['district1']] : '';

        $order->total_price = Cart::total();
        $order->note = $data['note'];

        $order->name2 = $data['name2'];
        $order->email2 = $data['email2'];
        $order->phone2 = $data['phone2'];
        $order->address2 = $data['address2'];
        $order->city2 = $data['city2'] != '' ? $address[$data['city2']]['name'] : '';
        $order->district2 = $data['district2'] != '' ? $address[$data['city2']]['cities'][$data['district2']] : '';
        $order->save();
        return $order;
    }

    public function createOrderDetail($order, $cart){
        foreach ($cart as $prod){
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->prod_id = $prod->id;
            $order_detail->prod_name = $prod->name;
            $order_detail->quantity = $prod->qty;
            $order_detail->price = $prod->price;
            $order_detail->save();
        }
    }
    public function orderSuccess(){
        return view('frontend.pages.payment_success');
    }
}
