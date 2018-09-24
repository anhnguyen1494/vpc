@extends('backpack::layout')

@section('title')
    Thống kê GiftCode
@stop

@section('after_styles')
    <style>

    </style>
@endsection

@section('header')
    <section class="content-header">
        <h1>Thống kê Đơn hàng</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix')) }}">Admin</a></li>
            <li class="active">Đơn hàng</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url(config('backpack.base.route_prefix')) }}"><i class="fa fa-angle-double-left"></i> Quay
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
                    <form action="" method="get" class="form-inline" role="form" id="search-form">
                        <div class="form-group">
                            <label for="oid">ID</label>
                            <input type="text" class="form-control" name="oid" id="oid" value="{{ $search['oid'] }}"
                                   placeholder="Nhập id">
                        </div>
                        <div class="form-group">
                            <label for="name1">Tên</label>
                            <input type="text" class="form-control" name="name1" id="name1" value="{{ $search['name1'] }}"
                                   placeholder="Nhập tên">
                        </div>
                        <div class="form-group space-input">
                            <label for="phone1">SĐT</label>
                            <input type="text" class="form-control" name="phone1" id="phone1" value="{{ $search['phone1'] }}"
                                   placeholder="Nhập SĐT">
                        </div>
                        <div class="form-group space-input">
                            <select class="form-control" id="status" name="status">
                                <option value="">Trạng thái</option>
                                <option value="0" {{ $search['status'] == "0" ? 'selected' : '' }}>Chưa xử lý</option>
                                <option value="1" {{ $search['status'] == 1 ? 'selected' : '' }}>Đã liên hệ</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
                <!-- /.box-header -->
                <div>Có tất cả: {{ $count }} đơn hàng</div>
                <div class="box-body">
                    <table id="table-gc" class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 40px">ID</th>
                            <th>Khách hàng</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>Giá trị</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name1 }}</td>
                                <td>{{ $order->phone1 }}</td>
                                <td style="width: 200px">{{ $order->address1 }} @if(!empty($order->district1)) ,{{ $order->district1 }} @endif
                                    @if(!empty($order->city1)), {{ $order->city1 }} @endif</td>
                                <td>{{ number_format($order->total_price) }}</td>
                                <td>
                                    @if($order->status == 0)
                                        <span class="label label-warning">Chờ xử lý</span>
                                    @else
                                        <span class="label label-success">Đã liên hệ</span>
                                    @endif
                                </td>
                                <td>{{ date('H:i:s d/m/Y',strtotime($order->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('backend.order.detail',$order->id)}}" class="btn btn-success"
                                       data-toggle="tooltip" title="Chi tiết"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i>Chi tiết</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $orders->links() }}

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
@endsection