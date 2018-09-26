@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/payment.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12">
            <div class="hidden-xs hidden-sm">
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
                        @if(count($cart) > 0)
                            @php( $stt = 0)
                            @foreach($cart as $key => $product)
                                @php($stt = ++$stt)
                                <tr>
                                    <td>
                                        {{ $stt }}
                                    </td>
                                    <td>
                                        <a href="{{ route('product.show', $product->options->slug) }}">
                                            <b>{{ $product->options->code_pro }} - {{ $product->name }}</b>
                                        </a>
                                    </td>
                                    <td><img class="cart_img"
                                             src="{{ $product->options->image }}">
                                    </td>
                                    <td>{{ number_format($product->price) }}</td>
                                    <td style="width:92px;">
                                        {{ $product->qty }}
                                    </td>
                                    <td>{{ number_format($product->price * $product->qty) }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center"><b>Không có sản phẩm nào</b></td>
                            </tr>
                        @endif
                        <tr>
                            <td colspan="5">Tổng cộng</td>
                            <td style="color:#4267b2;font-weight:bold;">{{ number_format($total_cart) }} VNĐ</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="hidden-lg hidden-md">
                <div class="header">
                    <span>Thanh toán</span>
                </div>

                    <table id="cart">
                        <tbody>
                        @if(count($cart) > 0)
                            @foreach($cart as $rowid => $product)
                                <tr>
                                    <td colspan="2"><b>HIK-01 - Lắp đặt 1 camera HIKVISION</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><img class="cart_img"
                                                         src="{{ $product->options->image }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Giá : {{ number_format($product->price) }} VNĐ</td>
                                    <td style="width: 80px">
                                        SL: {{ $product->qty }}
                                    </td>
                                </tr>
                                <tr class="text_last">
                                    <td colspan="2">Thành tiền: {{ number_format($product->price * $product->qty) }} VNĐ
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="2" class="text-center"><b>Không có sản phẩm nào</b></td>
                            </tr>
                        @endif
                        <tr>
                            <td colspan="2">Tổng cộng</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="color:#ff0000;font-weight:bold;">{{ number_format($total_cart) }} VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                <div class="clear"></div>
            </div>
            <div class="col-xs-12">
                <div class="header">
                    <span>Thanh toán</span>
                </div>
                <form action="{{ route('order') }}" method="post" role="form" class="order-info-box">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h3>THÔNG TIN THANH TOÁN</h3>
                            <div class="form-group">
                                <label for="name1">Họ và tên <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="name1" id="name1"
                                       placeholder="Nhập họ tên của bạn" required>
                            </div>
                            <div class="form-group">
                                <label for="email1">Email </label>
                                <input type="text" class="form-control" name="email1" id="email1"
                                       placeholder="Nhập email của bạn">
                            </div>
                            <div class="form-group">
                                <label for="phone1">Điện thoại <span style="color:red">(*)</span></label>
                                <label for="phone1">(Ghi chú: ghi rõ mã vùng đối với số điện thoại bàn, không cách khoảng
                                    hoặc dùng các ký tự .,- Vd: (08)xxxxxxxx, 090xxxxxxx)</label>
                                <input type="text" class="form-control" name="phone1" id="phone1"
                                       placeholder="Nhập số điện thoai của bạn" required>
                            </div>
                            <div class="form-group">
                                <label for="address1">Địa chỉ <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="address1" id="address1"
                                       placeholder="Nhập địa chỉ của bạn" required>
                            </div>
                            <div class="form-group">
                                <label for="city1">Tỉnh/Thành <span style="color:red">(*)</span></label>
                                <select name="city1" id="city1" class="form-control" required>
                                    <option value=""> Chọn Tỉnh/Thành</option>
                                    @foreach($address as $key => $addr)
                                        <option value="{{ $key }}">{{ $addr['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district1">Quận/Huyện <span style="color:red">(*)</span></label>
                                <select name="district1" id="district1" class="form-control" required>
                                    <option value="" id="district1_op"> Chọn Quận/Huyện</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="diff" value="diff" id="diff" checked>
                                        Địa chỉ thanh toán và địa chỉ giao hàng giống nhau (Tắt mục này nếu bạn không
                                        phải là người nhận hàng)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 info2">
                            <h3>THÔNG TIN GIAO HÀNG</h3>
                            <div class="form-group">
                                <label for="name2">Họ và tên <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" name="name2" id="name2"
                                       placeholder="Nhập họ tên của bạn">
                            </div>
                            <div class="form-group">
                                <label for="email2">Email</label>
                                <input type="text" class="form-control" name="email2" id="email2"
                                       placeholder="Nhập email của bạn">
                            </div>
                            <div class="form-group">
                                <label for="phone2">Điện thoại <span style="color:red">(*)</span></label>
                                <label for="phone2">(Ghi chú: ghi rõ mã vùng đối với số điện thoại bàn, không cách khoảng
                                    hoặc dùng các ký tự .,- Vd: (08)xxxxxxxx, 090xxxxxxx)</label>
                                <input type="text" class="form-control" name="phone2" id="phone2"
                                       placeholder="Nhập số điện thoai của bạn">
                            </div>
                            <div class="form-group">
                                <label for="address2">Địa chỉ </label>
                                <input type="text" class="form-control" name="address2" id="address2"
                                       placeholder="Nhập địa chỉ của bạn">
                            </div>
                            <div class="form-group">
                                <label for="city2">Tỉnh/Thành </label>
                                <select name="city2" id="city2" class="form-control">
                                    <option value=""> Chọn Tỉnh/Thành</option>
                                    @foreach($address as $key => $addr)
                                        <option value="{{ $key }}"> {{ $addr['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="district2">Quận/Huyện </label>
                                <select name="district2" id="district2" class="form-control">
                                    <option value="" id="district2_op"> Chọn Quận/Huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="note">Ghi chú đơn hàng</label>
                            <textarea name="note" id="note" rows="5" class="col-md-12 col-12"></textarea>
                            <p><span style="color:red">(*)</span> Thông tin bắt buộc</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" >Gửi đơn hàng</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
    <script>
        $(document).ready(function(){
            $('#diff').change(function(){
                var check = $(this).prop('checked');
                if(check){
                    $('.info2').css('display','none');
                }else{
                    $('.info2').css('display','block');
                };
            });
            $('#city1').change(function(){
                var city = $(this).val();
                var html = '<option value="" id="district1_op"> Chọn Quận/Huyện</option>';
                if(city != ''){
                    $.ajax({
                        url: "{{ route('payment.pick_city') }}",
                        type: 'POST',
                        data: {
                            city: city
                        },
                        success: function( res ) {
                            console.log(res.cities);
                            $.each(res.cities, function( index, value ) {
                                html+='<option value="'+index+'">'+value+'</option>';
                            });
                            $('#district1').html(html);
                        }
                    });
                }else{
                    $('#district1_op').attr('selected',true);
                }
            });
            $('#city2').change(function(){
                var city = $(this).val();
                var html = '<option value="" id="district1_op"> Chọn Quận/Huyện</option>';
                if(city != ''){
                    $.ajax({
                        url: "{{ route('payment.pick_city') }}",
                        type: 'POST',
                        data: {
                            city: city
                        },
                        success: function( res ) {
                            console.log(res.cities);
                            $.each(res.cities, function( index, value ) {
                                html+='<option value="'+index+'">'+value+'</option>';
                            });
                            $('#district2').html(html);
                        }
                    });
                }else{
                    $('#district2_op').attr('selected',true);
                }
            });
        });
    </script>
@endsection