<div class="top">
    <div id="top-menu" class="hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-7">
                            <div id="top-hotline">
                                <div class="name">
                                    <a href="#">Sản phẩm bán chạy</a>|
                                    <a href="#">Sản phẩm khuyến mại</a>|
                                    <a href="#">Sản phẩm mới</a><img style="margin:-4px 0 0 2px;"
                                                                     src="{{ asset('/frontend/images/new.gif').'?'.time() }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div id="top-hotline" style="float:right;">
                                <div class="name">
                                    <a class="name_cart" href="/gio-hang">Giỏ hàng (<b>{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</b> sản
                                        phẩm)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container hidden-xs hidden-sm">
    <div class="row top-header" id="ScrollTo">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div id="logo">
                        <a href="{{ route('home') }}">
                            <img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ"
                                 alt="Camera VPC Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc"
                                 src="{{ asset('/frontend/images/logo-vanphong.png').'?'.time() }}">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img style="width:100%;margin-top:25px;" alt="Cam kết dịch vụ"
                         src="{{ asset('/frontend/images/promise.png') }}">
                </div>
                <div class="col-12 col-md-3">
                    <div id="hotline">
                        <div class="name">Tư vấn lắp đặt camera</div>
                        <div class="clear"></div>
                        <div class="phone">
                            <a href="tel:{{ $share['settings']['phone'] }}">{{ $share['settings']['phone'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>