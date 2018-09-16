@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/cart.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12">
            <div class="hidden-xs hidden-sm">
                <div class="col-xs-12">
                    <div class="header">
                        <span>Giỏ hàng</span>
                    </div>
                    <form action="http://fptcamera.vn/update-cart" method="post" accept-charset="utf-8">
                        <table id="cart">
                            <tbody>
                            <tr>
                                <th></th>
                                <th>Mã - Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][id]" value="420">

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][rowid]"
                                   value="b6f0479ae87d244975439c6124592772">

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][name]"
                                   value="L%E1%BA%AFp+%C4%91%E1%BA%B7t+1+camera+HIKVISION">

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][price]" value="1999000">

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][SKU]" value="HIK-01">

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][slug]"
                                   value="lap-dat-1-camera-hikvision">

                            <input type="hidden" name="cart[b6f0479ae87d244975439c6124592772][image]"
                                   value="san-pham/tron-bo-1-camera-hd-tvi-hikvision.jpg">
                            <tr>
                                <td><a title="Xóa sản phẩm" style="font-size:20px;color:#000;"
                                       href="http://fptcamera.vn/removecart/b6f0479ae87d244975439c6124592772">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td><b>HIK-01 - Lắp đặt 1 camera HIKVISION</b></td>
                                <td><img class="cart_img"
                                         src="{{ asset('/frontend/images/tron-bo-1-camera-hd-tvi-hikvision.jpg') }}">
                                </td>
                                <td>1.999.000 VNĐ</td>
                                <td style="width:92px;">
                                    <span class="detail-spinner">
                                        <span class="container-detail">
                                            <input type="text" name="qty" value="1" class="cart_qty form-control"
                                                   style="display: block;">
                                            <span class="input-group-btn-vertical">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </span>
                                </td>
                                <td>1.999.000 VNĐ</td>
                            </tr>
                            <tr>
                                <td colspan="5">Tổng cộng</td>
                                <td style="color:#ff0000;font-weight:bold;">1,999,000 VNĐ</td>
                            </tr>
                            <tr class="no-border">
                                <td colspan="6">
                                    <input class="btn1" type="button" value="Xóa giỏ hàng" onclick="clear_cart()">
                                    <input style="margin-left:5px;" class="btn1" type="button" value="Tiếp tục mua hàng"
                                           onclick="location.href='/'">
                                    <input style="float:right;margin-left:5px" class="btn2" type="button"
                                           value="Thanh toán" onclick="location.href='/don-hang'">
                                    <input style="float:right;margin:5px" class="btn3" type="submit"
                                           value="Cập nhật số lượng">

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection