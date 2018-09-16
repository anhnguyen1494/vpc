@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/payment.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div class="header">
                    <span>Đơn hàng</span>
                </div>
                <table id="cart">
                    <tbody>
                    <tr>
                        <th>STT</th>
                        <th>Mã - Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td><b>HIK-01 - Lắp đặt 1 camera HIKVISION</b></td>
                        <td>
                            <img class="cart_img"
                                 src="{{ asset('/frontend/images/tron-bo-1-camera-hd-tvi-hikvision.jpg') }}">
                        </td>
                        <td>1.999.000 VNĐ</td>
                        <td style="width:92px;">
                            1
                        </td>
                        <td>1.999.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td colspan="5">Tổng cộng</td>
                        <td style="color:#ff0000;font-weight:bold;">1,999,000 VNĐ</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-xs-12">
                <div class="header">
                    <span>Thanh toán</span>
                </div>
                <form action="" method="post" role="form" class="order-info-box">
                    {{ csrf_field() }}
                    <input type="hidden" name="cart_id" value="">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h3>THÔNG TIN THANH TOÁN</h3>
                            <div class="form-group">
                                <label for="name">Họ và tên <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Nhập họ tên của bạn">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Nhập email của bạn">
                            </div>
                            <div class="form-group">
                                <label for="phone">Điện thoại <span style="color:red">(*)</span></label>
                                <label for="phone">(Ghi chú: ghi rõ mã vùng đối với số điện thoại bàn, không cách khoảng
                                    hoặc dùng các ký tự .,- Vd: (08)xxxxxxxx, 090xxxxxxx)</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder="Nhập số điện thoai của bạn">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="address" id="address"
                                       placeholder="Nhập địa chỉ của bạn">
                            </div>
                            <div class="form-group">
                                <label for="city">Tỉnh/Thành <span style="color:red">(*)</span></label>
                                <select name="city" id="city" class="form-control">
                                    <option value=""> -- Select One --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district">Quận/Huyện <span style="color:red">(*)</span></label>
                                <select name="district" id="district" class="form-control">
                                    <option value=""> -- Select One --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="diff" id="" checked>
                                        Địa chỉ thanh toán và địa chỉ giao hàng giống nhau (Tắt mục này nếu bạn không
                                        phải là người nhận hàng)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <h3>THÔNG TIN GIAO HÀNG</h3>
                            <div class="form-group">
                                <label for="name">Họ và tên <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Nhập họ tên của bạn">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Nhập email của bạn">
                            </div>
                            <div class="form-group">
                                <label for="phone">Điện thoại <span style="color:red">(*)</span></label>
                                <label for="phone">(Ghi chú: ghi rõ mã vùng đối với số điện thoại bàn, không cách khoảng
                                    hoặc dùng các ký tự .,- Vd: (08)xxxxxxxx, 090xxxxxxx)</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder="Nhập số điện thoai của bạn">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="address" id="address"
                                       placeholder="Nhập địa chỉ của bạn">
                            </div>
                            <div class="form-group">
                                <label for="city">Tỉnh/Thành <span style="color:red">(*)</span></label>
                                <select name="city" id="city" class="form-control">
                                    <option value=""> -- Select One --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district">Quận/Huyện <span style="color:red">(*)</span></label>
                                <select name="district" id="district" class="form-control">
                                    <option value=""> -- Select One --</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="note_order">Ghi chú đơn hàng</label>
                            <textarea name="note_order" id="note_order" rows="5" class="col-md-12 col-12"></textarea>
                            <p><span style="color:red">(*)</span> Thông tin bắt buộc</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" >Gửi đơn hàng</button>
                </form>
            </div>
        </div>
    </div>
@endsection