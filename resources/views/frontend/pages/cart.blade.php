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
                    <form action="{{ route('product.updatecart') }}" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
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
                            @if(count($cart) > 0)
                                @foreach($cart as $rowid => $product)
                                    <input type="hidden" name="cart[{{ $rowid }}][rowid]"
                                           value="{{ $product->rowId }}">
                                    <tr>
                                        <td><a title="Xóa sản phẩm" style="font-size:20px;color:#000;"
                                               href="{{ route('product.removecart',$product->rowId) }}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.show', $product->options->slug) }}">
                                                <b>{{ $product->options->code_pro }} - {{ $product->name }}</b>
                                            </a>
                                        </td>
                                        <td><img class="cart_img"
                                                 src="{{ $product->options->image.'?'.time() }}">
                                        </td>
                                        <td>{{ number_format($product->price) }}</td>
                                        <td style="width:92px;">
                                            <span class="detail-spinner">
                                                <span class="container-detail">
                                                    <input type="text" name="cart[{{ $rowid }}][qty]"
                                                           value="{{ $product->qty }}" class="cart_qty form-control"
                                                           style="display: block;">
                                                    <span class="input-group-btn-vertical">
                                                        <button class="btn btn-default bootstrap-touchspin-up"
                                                                type="button">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                        <button class="btn btn-default bootstrap-touchspin-down"
                                                                type="button">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </span>
                                                </span>
                                            </span>
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
                            <tr class="no-border">
                                <td colspan="6">
                                    <a href="{{ route('home') }}" class="destroy-cart">Tiếp tục mua hàng</a>
                                    @if($total_cart != 0)
                                        <a href="{{ route('product.destroycart') }}" class="destroy-cart">Xóa giỏ
                                            hàng</a>
                                        <input style="float:right;margin-left:5px" class="btn2" type="button"
                                               value="Thanh toán" onclick="location.href='/don-hang'">
                                        <input style="float:right;margin:5px" class="btn3" type="submit"
                                               value="Cập nhật số lượng">
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="hidden-lg hidden-md">
                <div class="col-xs-12">
                    <div class="header">
                        <span>Giỏ hàng</span>
                    </div>
                    <form action="{{ route('product.updatecart') }}" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <table id="cart">
                            <tbody>
                            @if(count($cart) > 0)
                                @foreach($cart as $rowid => $product)
                                    <input type="hidden" name="cart[{{ $rowid }}][rowid]"
                                           value="{{ $product->rowId }}">
                                    <tr>
                                        <td colspan="2"><b>HIK-01 - Lắp đặt 1 camera HIKVISION</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><img class="cart_img"
                                                             src="{{ $product->options->image.'?'.time() }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ number_format($product->price) }} VNĐ</td>
                                        <td style="width: 80px">
                                            <span class="detail-spinner">
                                                <span class="container-detail">
                                                    <input type="text" name="cart[{{ $rowid }}][qty]"
                                                           value="{{ $product->qty }}" class="cart_qty form-control"
                                                           style="display: block;">
                                                    <span class="input-group-btn-vertical">
                                                        <button class="btn btn-default bootstrap-touchspin-up"
                                                                type="button">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                        <button class="btn btn-default bootstrap-touchspin-down"
                                                                type="button">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text_last">
                                        <td>{{ number_format($product->price * $product->qty) }} VNĐ
                                        </td>
                                        <td style="width: 80px;text-align: center">
                                            <a title="Xóa sản phẩm" style="font-size:20px;color:#000;"
                                               href="{{ route('product.removecart',$product->rowId) }}">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
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
                            <tr class="no-border">
                                <td colspan="2" class="btn-cart-container">
                                    @if($total_cart != 0)
                                        <a href="{{ route('product.destroycart') }}" class="destroy-cart btn-cart">Xóa giỏ
                                            hàng</a>
                                    @endif
                                    <a href="{{ route('home') }}" class="destroy-cart btn-cart">Tiếp tục mua hàng</a>
                                    @if($total_cart != 0)
                                        <input style="float:right;margin:5px" class="btn3 btn-cart" type="submit"
                                               value="Cập nhật số lượng">
                                        <input style="float:right;margin-left:5px" class="btn2 btn-cart" type="button"
                                               value="Thanh toán" onclick="location.href='/don-hang'">
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
    <script>
        $(document).ready(function () {
            $('.bootstrap-touchspin-up').click(function () {
                var _this = $(this).parents('.container-detail').find('.cart_qty');
                var cart_qty = _this.val();
                _this.val(++cart_qty);
            });
            $('.bootstrap-touchspin-down').click(function () {
                var _this = $(this).parents('.container-detail').find('.cart_qty');
                var cart_qty = _this.val();
                if (cart_qty > 1) {
                    _this.val(--cart_qty);
                }
            });
        });
    </script>
@endsection