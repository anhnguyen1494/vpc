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
                    <div class="col-xs-12 col-lg-12">
                        <div class="contain">
                            @foreach($pages as $page)
                            <a href="{{ route('frontend.page.show',$page->slug) }}">{{ $page->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(!empty($categories))
            @foreach($categories as $category)
                @if(count($category->products) > 0)
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
                                                                    class="lazy" data-src="{{ asset($product->image).'?'.time() }}">
                                                        </a>
                                                        <div class="caption">
                                                            <a href="{{ route('product.show', $product->slug) }}" class="trademark">{{ $product->trademark }}</a>
                                                            <a href="{{ route('product.show', $product->slug) }}">
                                                                <h3>{{ $product->name }}</h3></a>
                                                            <div class="clear"></div>
                                                            <div>
                                                                @if($product->status == 0)
                                                                    <span class="badge badge-success">Còn hàng</span>
                                                                @else
                                                                    <span class="badge badge-secondary">Hết hàng</span>
                                                                @endif
                                                            </div>
                                                            <div class="container-price">
                                                                <span class="new-price">{{ number_format($product->price) }} đ</span>
                                                                <span class="old-price">
                                                                    @if(!empty($product->price_real))
                                                                        {{ number_format($product->price_real) }} đ
                                                                    @endif
                                                                </span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm" style="padding: 10px 4px;">
                                    @if(!empty($category->image_right))
                                    <a class="b_a2" href="{{ route('category',$category->slug) }}">
                                        <img class="image_right lazy"
                                                alt="{{ $category->name }}"
                                              data-src="{{ asset($category->image_right).'?'.time() }}">
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        @endif
    </div>

@endsection