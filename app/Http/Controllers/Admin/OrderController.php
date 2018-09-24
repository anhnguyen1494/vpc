<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request){
        $order_builder = Order::query();
        //search giftcode
        $oid = $request->get('oid');
        if (!empty($oid)) {
            $order_builder = $order_builder->where('id', $oid);
        }
        //search loại giftcode
        $name1 = $request->get('name1');
        if (!empty($name1)) {
            $order_builder = $order_builder->where('name1', $name1);
        }
        //search đã có uid nào sử dụng chưa
        $phone1 = $request->get('phone1');
        if (!empty($phone1)) {
            $order_builder = $order_builder->where('phone1', $phone1);
        }
        $status = $request->get('status');
        if ($status === "1" || $status === "0") {
            $order_builder = $order_builder->where('status', $status);
        }

        $count = $order_builder->count();
        $orders = $order_builder->paginate(30)->appends(request()->query());
        $search = [
            'oid' => $oid,
            'name1' => $name1,
            'phone1' => $phone1,
            'status' => $status,
        ];
        return view('backend.order',compact('orders','count','search'));
    }
    public function detail(Request $request, $oid){
        $order = Order::with('order_details')->where('id',$oid)->first();
        return view('backend.order_detail',compact('order'));
    }
    public function updateStatus(Request $request, $oid){
        $status = $request->get('status');
        $order = Order::with('order_details')->where('id',$oid)->first();
        $order->status = $status;
        $order->save();
        session()->flash('message','Cập nhật thành công');
        return back();
    }
}
