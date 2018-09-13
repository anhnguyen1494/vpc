@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    @include('frontend.includes.banner')
    <div class="clear"></div>
    <div class="container">
        <div class="col-xs-12 hidden-xs hidden-sm">
            <div id="sub-menu">
                <div class="row">
                    <div class="col-xs-12 col-lg-7">
                        <div class="contain">
                            <a href="http://fptcamera.vn/tin-tuc/gioi-thieu">Sơ lược công ty</a>
                            <a href="http://fptcamera.vn/tin-tuc/chinh-sach">Chính sách ưu đãi</a>
                            <a href="http://fptcamera.vn/tin-tuc/tin-camera">Tin camera</a>
                            <a href="http://fptcamera.vn/lien-he">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @for($j=1;$j<=4;$j++)
            <div class="col-xs-12">
                <div class="titleCategory">
                    <h4><a href="http://fptcamera.vn/camera-tron-bo">Camera trọn bộ</a></h4>
                </div>
                <div class="tab-content ">
                    <div role="tabpanel" class="tab-pane active" id="dmsp-camera-tron-bo">
                        <div class="row">
                            <div class="col-xs-12 col-lg-9">
                                <div class="row">
                                    @for($i=1;$i<=6;$i++)
                                        <div class="col-xs-6 col-sm-4 col-lg-3 product-item">
                                            <div class="thumbnail products" style="height: 253px;">
                                                <a href="#">
                                                    <img
                                                            alt="tron-bo-1-camera-hd-tvi-hikvision"
                                                            src="{{ asset('/frontend/images/lap-2-camera-hikvision1.jpg') }}">
                                                </a>
                                                <div class="caption">
                                                    <a href="http://fptcamera.vn/lap-dat-1-camera-hikvision"><h3>Lắp đặt
                                                            1
                                                            camera HIKVISION</h3></a>
                                                    <div class="clear"></div>
                                                    <span class="new-price">1.999.000 đ</span>
                                                    <span class="old-price">2.850.000 đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="col-md-3 hidden-xs hidden-sm" style="padding: 10px 4px;">
                                <a class="b_a2" href="http://fptcamera.vn/camera-tron-bo"><img
                                            alt="lap-dat-camera-quan-sat-tron-bo-hd-gia-re1"
                                            src="{{ asset('/frontend/images/lap-dat-camera-quan-sat-tron-bo-hd-gia-re1.jpg') }}"></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="modal fade" id="supportonlineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supportonlineModal">Hỗ trợ trực tuyến</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modal_hotline_list">
                        <div class="row">
                            <div class="col-xs-6 col-md-4">
                                <div class="hotline">
                                    <p class="title">Mr: Xuân</p>
                                    <p>Tư vấn bán hàng</p>
                                    <p>Tel: 098 448 9688</p>
                                    <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i
                                                style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="hotline">
                                    <p class="title">Mr: Trung</p>
                                    <p>Chi nhánh Sài Gòn</p>
                                    <p>Tel: 0907 903 171</p>
                                    <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i
                                                style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection