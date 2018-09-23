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
        @if(!empty($categories))
            @foreach($categories as $category)
                <div class="col-xs-12">
                    <div class="titleCategory">
                        <h4><a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></h4>
                    </div>
                    <div class="tab-content ">
                        <div role="tabpanel" class="tab-pane active" id="dmsp-camera-tron-bo">
                            <div class="row">
                                <div class="col-xs-12 col-lg-9">
                                    <div class="row">
                                        @if(!empty($category->products))
                                            @foreach($category->products as $product)
                                                <div class="col-xs-6 col-sm-4 col-lg-3 product-item">
                                                    <div class="thumbnail products" style="height: 253px;">
                                                        <a href="{{ route('product.show', ['id' => $product->id, 'slug_product' => str_slug($product->name)]) }}">
                                                            <img
                                                                    alt="{{ $product->name }}"
                                                                    src="{{ asset($product->image) }}">
                                                        </a>
                                                        <div class="caption">
                                                            <a href="{{ route('product.show', ['id' => $product->id, 'slug_product' => str_slug($product->name)]) }}">
                                                                <h3>{{ $product->name }}</h3></a>
                                                            <div class="clear"></div>
                                                            <span class="new-price">{{ number_format($product->price) }} đ</span>
                                                            <span class="old-price">{{ number_format($product->price_real) }} đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
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
            @endforeach
        @endif
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