@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/category.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12 pad-btm">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="header">
                        <span>Camera trọn bộ</span>
                    </div>
                    <div class="body">
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re">Trọn bộ camera giá rẻ</a>
                        <a class="sort_list" href="http://fptcamera.vn/camera-nhap-khau">Camera Nhập khẩu</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-hd">Trọn bộ camera HD</a>
                        <a class="sort_list" href="http://fptcamera.vn/lap-dat-camera-dahua">Lắp đặt camera Dahua</a>
                        <a class="sort_list" href="http://fptcamera.vn/lap-dat-camera-hikvision">Lắp đặt camera Hikvision</a>
                    </div>
                    <div class="header">
                        <span>Hãng sản xuất</span>
                    </div>
                    <div class="body">
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?b=5">Camera Dahua</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?b=7">Camera Hikvision</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?b=35">Camera Samsung</a>
                    </div>
                    <div class="header">
                        <span>Tìm theo giá</span>
                    </div>
                    <div class="body">
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?p=4">Từ 1.000.000 đến 3.000.000</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?p=5">Từ 3.000.000 đến 5.000.000</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?p=6">Từ 5.000.000 đến 10.000.000</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?p=8">Từ 14.000.000 đến 20.000.000</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?p=10">Từ 20.000.000 đến 50.000.000</a>
                    </div>
                    <div class="header">
                        <span>Tìm theo độ phân giải</span>
                    </div>
                    <div class="body">
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=2">1.0 MegaPixel(1280 x 720px)</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=3">1.3 MegaPixel(1280 x 960px)</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=4">2.0 MegaPixel(1920 x 1080px)</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=5">3.0 MegaPixel(2048×1536)</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=18">5.0 Megapixel</a>
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=19">4.1 Megapixel 2688(H)×1520(V)</a>
                    </div>
                    <div class="header">
                        <span>Tìm theo số kênh</span>
                    </div>
                    <div class="body">
                        <a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?c=1">Đầu ghi 4 kênh</a>
                    </div>

                </div>
                <div class="col-xs-12 col-md-9" style="padding-left: 0;">
                    <div class="clear"></div>
                    <div class="header4">
                        <h1>Trọn bộ camera giá rẻ</h1>
                        <h2 style="display:none;">Trọn bộ camera giá rẻ</h2>

                        <div class="clear"></div>
                        <select style="float:right;margin-top:3px;" onchange="this.options[this.selectedIndex].value &amp;&amp; (window.location = this.options[this.selectedIndex].value);">
                            <option value="http://fptcamera.vn/tron-bo-camera-gia-re">Sắp xếp theo</option>
                            <option value="http://fptcamera.vn/tron-bo-camera-gia-re/?o=p-asc">Giá tăng dần</option>
                            <option value="http://fptcamera.vn/tron-bo-camera-gia-re/?o=p-desc">Giá giảm dần</option>
                        </select>
                    </div>
                    <div class="description2">
                    </div>
                    <div class="clear"></div>
                    <div class="product_list">
                        <div class="row">
                            @for($i=1;$i<10;$i++)
                            <div class="col-xs-6 col-sm-4 col-lg-3">
                                <div class="thumbnail products" style="height: 253px;">
                                    <a href="http://fptcamera.vn/lap-dat-1-camera-hikvision">
                                        <img alt="tron-bo-1-camera-hd-tvi-hikvision" src="{{ asset('/frontend/images/tron-bo-1-camera-hd-tvi-hikvision.jpg') }}">
                                    </a>
                                    <div class="caption">
                                        <a href="/san-pham/lap-dat-1-camera-hikvision"><h3>Lắp đặt 1 camera HIKVISION</h3></a>
                                        <div class="clear"></div>
                                        <span class="new-price">1.999.000 đ</span>
                                        <span class="old-price">2.850.000 đ</span>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection