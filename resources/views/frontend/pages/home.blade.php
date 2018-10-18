@extends('frontend.layout')

@section('meta')
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Công ty Văn Phong Camera cung cấp camera uy tín, chất lượng"/>
    <meta property="og:image" content="{{ asset('/frontend/images/logo-vpc.png') }}"/>
    <meta name="og:description" content="Công ty Văn Phong Camera cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
    <meta content="robots" content="index,follow">
@endsection

@section('after_styles')
    <link href="{{ asset('/frontend/css/home.css').'?'.time() }}" rel="stylesheet" type="text/css"/>
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
                                            @php($products = $category->products()->orderBy('order')->take(8)->get())
                                            @foreach($products as $product)
                                                @include('frontend.includes.product')
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