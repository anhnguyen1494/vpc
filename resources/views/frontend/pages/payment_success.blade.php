@extends('frontend.layout')

@section('after_styles')
    <style>
        .order_success{
            max-height: 500px;
            text-align: center;
            padding: 50px 30px;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12">
            <div class="order_success">
                <h3>Chúc mừng bạn đã đặt hàng thành công</h3>
                <p>Đơn hàng của bạn sẽ được giao tới bạn trong vòng 2 đến 3 ngày tới!</p>
                <p>Cảm ơn đã tin tưởng vanphongcamera.vn</p>
            </div>
        </div>
    </div>
@endsection