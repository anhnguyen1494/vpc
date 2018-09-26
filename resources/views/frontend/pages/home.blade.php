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
                            <a href="#">Sơ lược công ty</a>
                            <a href="#">Chính sách ưu đãi</a>
                            <a href="#">Tin camera</a>
                            <a href="#">Liên hệ</a>
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
                                <div class="col-12 col-lg-9">
                                    <div class="row prod-container">
                                        @if(!empty($category->products))
                                            @foreach($category->products as $product)
                                                <div class="col-6 col-sm-4 col-lg-3 product-item">
                                                    <div class="thumbnail products" style="height: 253px;">
                                                        <a href="{{ route('product.show', $product->slug) }}">
                                                            <img
                                                                    alt="{{ $product->name }}"
                                                                    src="{{ asset($product->image) }}">
                                                        </a>
                                                        <div class="caption">
                                                            <a href="{{ route('product.show', $product->slug) }}">
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
                                    <a class="b_a2" href="{{ route('category',$category->slug) }}">
                                        <img class="image_right"
                                                alt="{{ $category->name }}"
                                                src="{{ asset($category->image_right) }}">
                                    </a>
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
                            <div class="col-6 col-md-4">
                                <div class="hotline">
                                    <p class="title">Mr: Cường</p>
                                    <p>Tư vấn bán hàng</p>
                                    <p>Tel: 0984.163.898</p>
                                    <a style="float:left" href="skype:cuonghh10?chat" class="icons skype"><i
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