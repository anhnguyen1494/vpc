@extends('backpack::layout')

@section('title')
    Chi tiết đơn hàng
@stop

@section('after_styles')
    <style>
        #table-order th{
            width: 300px;
        }
    </style>
@endsection

@section('header')
    <section class="content-header">
        <h1>Chi tiết đơn hàng</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix')) }}">Admin</a></li>
            <li><a href="{{ route('backend.order') }}">Đơn hàng</a></li>
            <li class="active">Chi tiết</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('backend.order') }}"><i class="fa fa-angle-double-left"></i> Quay
                lại</a><br><br>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h2 style="text-align: center">
                        Đơn hàng
                    </h2>
                    <table id="table-order" class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Trạng thái</th>
                                <td>
                                    <form action="{{ route('backend.order.update_status', $order->id) }}" method="post" class="form-inline" role="form">
                                        {{ csrf_field() }}
                                        <select name="status" id="status" class="form-control">
                                            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}> Chờ xử lý</option>
                                            <option value="1" {{ $order->status == 1 ? 'selected' : '' }}> Đã liên hệ</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <th>Giá trị đơn hàng</th>
                                <td>{{ number_format($order->total_price) }} VNĐ</td>
                            </tr>
                            <tr>
                                <th>Tên khách thanh toán</th>
                                <td>{{ $order->name1 }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $order->email1 }}</td>
                            </tr>
                            <tr>
                                <th>SĐT</th>
                                <td>{{ $order->phone1 }}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>{{ $order->address1 }} @if(!empty($order->district1)) ,{{ $order->district1 }} @endif
                                    @if(!empty($order->city1)), {{ $order->city1 }} @endif</td>
                            </tr>
                            <tr>
                                <th colspan="2"></th>
                            </tr>
                            <tr>
                                <th>Tên khách nhận hàng</th>
                                <td>{{ $order->name2 }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $order->email2 }}</td>
                            </tr>
                            <tr>
                                <th>SĐT</th>
                                <td>{{ $order->phone2 }}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>{{ $order->address2 }} @if(!empty($order->district2)) ,{{ $order->district2 }} @endif
                                    @if(!empty($order->city2)), {{ $order->city2 }} @endif</td>
                            </tr>
                            <tr>
                                <th>Ghi chú</th>
                                <td>{{ $order->note }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 style="text-align: center">
                        Sản phẩm
                    </h2>
                    <table class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        @foreach($order->order_details as $key => $product)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    <a href="{{ route('product.show', ['id' => $product->prod_id, 'slug_product' => str_slug($product->prod_name)]) }}">
                                        <b>{{ $product->prod_name }}</b>
                                    </a>
                                </td>
                                <td>{{ number_format($product->price) }}</td>
                                <td style="width:92px;">
                                    {{ $product->quantity }}
                                </td>
                                <td>{{ number_format($product->price * $product->quantity) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">Tổng cộng</td>
                            <td style="color:#4267b2;font-weight:bold;">{{ number_format($order->total_price) }} VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
@endsection