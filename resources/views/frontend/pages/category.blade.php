@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/category.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-12 pad-btm">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm" style="padding-left: 0;padding-right:15px">
                    <div class="header">
                        <span>Hãng sản xuất</span>
                    </div>
                    <div class="body">
                        @foreach($products_hsx as $hsx)
                            <a class="sort_list {{ $search['trademark'] == $hsx ? 'active' : '' }}" href="{{ route('category',$category->slug).'?trademark='.$hsx }}">{{$hsx}}</a>
                        @endforeach
                    </div>
                    <div class="header">
                        <span>Tìm theo giá</span>
                    </div>
                    <div class="body">
                        @foreach($products_price as $price)
                            <a class="sort_list {{ $search['price'] == $price ? 'active' : '' }}" href="{{ route('category',$category->slug).'?price='.$price }}">{{ number_format($price) }} đ</a>
                        @endforeach
                    </div>
                    {{--<div class="header">--}}
                        {{--<span>Tìm theo độ phân giải</span>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=2">1.0 MegaPixel(1280 x 720px)</a>--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=3">1.3 MegaPixel(1280 x 960px)</a>--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=4">2.0 MegaPixel(1920 x 1080px)</a>--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=5">3.0 MegaPixel(2048×1536)</a>--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=18">5.0 Megapixel</a>--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?r=19">4.1 Megapixel 2688(H)×1520(V)</a>--}}
                    {{--</div>--}}
                    {{--<div class="header">--}}
                        {{--<span>Tìm theo số kênh</span>--}}
                    {{--</div>--}}
                    {{--<div class="body">--}}
                        {{--<a class="sort_list" href="http://fptcamera.vn/tron-bo-camera-gia-re/?c=1">Đầu ghi 4 kênh</a>--}}
                    {{--</div>--}}

                </div>
                <div class="col-12 col-md-9" style="padding-left: 0;padding-right:0">
                    <div class="clear"></div>
                    <div class="header4">
                        <h1>{{ $category->name }}</h1>
                        <h2 style="display:none;">{{$category->name}}</h2>

                        <div class="clear"></div>
                        <select style="float:right;margin-top:3px;" onchange="this.options[this.selectedIndex].value &amp;&amp; (window.location = this.options[this.selectedIndex].value);">
                            <option value="{{ route('category',$category->slug) }}" >Sắp xếp theo</option>
                            <option value="{{ route('category',$category->slug).'?order=asc' }}" {{ $search['order'] == 'asc' ? 'selected' : '' }}>Giá tăng dần</option>
                            <option value="{{ route('category',$category->slug).'?order=desc'}}" {{ $search['order'] == 'desc' ? 'selected' : '' }}>Giá giảm dần</option>
                        </select>
                    </div>
                    <div class="description2">
                    </div>
                    <div class="clear"></div>
                    <div class="product_list">
                        <div class="row" style="padding-right: 15px;">
                        @if(!empty($products))
                            @foreach($products as $product)
                                @include('frontend.includes.product')
                            {{--<div class="col-6 col-sm-4 col-lg-3">--}}
                                {{--<div class="thumbnail products" style="height: 253px;">--}}
                                    {{--<a href="{{ route('product.show', $product->slug) }}">--}}
                                        {{--<img alt="{{ $product->name }}"--}}
                                             {{--class="lazy" data-src="{{ asset($product->image).'?'.time() }}">--}}
                                    {{--</a>--}}
                                    {{--<div class="caption">--}}
                                        {{--<a href="{{ route('product.show', $product->slug) }}">--}}
                                            {{--<h3>{{ $product->name }}</h3>--}}
                                        {{--</a>--}}
                                        {{--<div class="clear"></div>--}}
                                        {{--<span class="new-price">{{ number_format($product->price) }} đ</span>--}}
                                        {{--<span class="old-price">{{ number_format($product->price_real) }} đ</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            @endforeach
                        @endif
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection