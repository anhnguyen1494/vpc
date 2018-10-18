@extends('frontend.layout')

@section('meta')
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ empty($product->meta_title) ? $product->name : $product->meta_title }}"/>
    <meta property="og:image" content="{{ asset($product->image) }}"/>
    <meta name="description"
          content="{{ empty($product->meta_description) ? 'Công ty Văn Phong Camera cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.' : $product->meta_title }}">
    <meta name="keywords" content="{{ empty($product->meta_keywords) ? $product->name : $product->meta_keywords }}">
    <meta content="robots" content="index,follow">
@endsection

@section('after_styles')
    <link href="{{ asset('/frontend/css/product.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12 pad-btm">
            <div class="col-xs-12">
                <div id="ScrollTo2" class="article_header my-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li>
                            <a href="{{ route('category',$product->category->slug) }}">{{ $product->category->name }}</a>
                        </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <div class="" style="width:100%;background:#fff;border:1px solid #ccc;padding:10px;">
                            <a data-toggle="modal" data-target=".bs-example-modal-lg">
                                <img style="cursor:pointer;display:block;margin:0 auto;background:#fff;"
                                     alt="{{ $product->name }}"
                                     class="lazy" data-src="{{ asset($product->image).'?'.time() }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="prd-desc equalheight1" style="min-height: 313px;">
                            <h1 class="header2">
                                {{ $product->name }}</h1>
                            <div class="clear"></div>
                            <p>Mã sản phẩm: <b>{{ $product->code_pro }}</b></p>
                            <p>Thương hiệu: <a href="#">{{ $product->trademark }}</a></p>
                            <p>Giá thị trường: <span class="detail-oldprice">{{ number_format($product->price_real) }}
                                    đ</span></p>
                            <p>Giá bán: <span class="detail-price">{{ number_format($product->price) }} đ</span>
                                @if(!empty($product->price_real))
                                    <span class="badge badge-danger ml-1">-{{ round(100-($product->price/$product->price_real)*100) }}
                                        %</span>
                                @endif
                            </p>
                            <p>Tình trạng: <span class="detail-stock">{{ $product->status == 0 ? 'Còn' : 'Hết' }}
                                    hàng</span></p>
                            <p>Bảo hành: <span class="detail-stock">{{ $product->guarantee }} Tháng</span></p>
                            <div class="clear"></div>
                            <form action="" class="addcart" method="post"
                                  accept-charset="utf-8">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$product->id}}">

                                <input type="hidden" name="name" value="{{$product->name}}">

                                <input type="hidden" name="price" value="{{$product->price}}">

                                <input type="hidden" name="code_pro" value="{{ $product->code_pro }}">

                                <input type="hidden" name="slug" value="{{ $product->slug }}">

                                <input type="hidden" name="image"
                                       value="{{ asset($product->image) }}">
                                <p>Số lượng:
                                    <span class="detail-spinner">
                                        <span class="container-detail">
                                            <input type="text" name="qty" value="1" class="cart_qty form-control"
                                                   style="display: block;">
                                            <span class="input-group-btn-vertical">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </span>
                                </p>
                                <input type="submit" value="Mua ngay" class="buy_now">
                                <input type="submit" value="Thêm giỏ hàng" class="cart_submit">
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="row" id="mb-content-product">
            <div class="col-xs-12 col-md-9">
                <div class="">
                    <nav>
                        <div class="nav nav-tabs custom-tabs2" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                               role="tab" aria-controls="nav-home" aria-selected="true">Chi tiết sản phẩm</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                               role="tab" aria-controls="nav-profile" aria-selected="false">Thông số kĩ thuật</a>
                            @if(!empty($product->promotion))
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">Chương trình khuyến
                                    mãi</a>
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            {!! $product->details !!}
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            {!! $product->specification !!}
                        </div>
                        @if(!empty($product->promotion))
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                {!! $product->promotion !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="header3">Sản phẩm cùng danh mục</span>
                @foreach($cate->products as $prod)
                    <div class="media products">
                        <div class="media-left">
                            <a href="{{ route('product.show', $prod->slug) }}">
                                <img class="media-object lazy" alt="{{ $prod->name }}"
                                     data-src="{{ asset($prod->image).'?'.time() }}">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('product.show', $prod->slug) }}">
                                <h4 class="media-heading">{{ $prod->name }}</h4>
                            </a>
                            <span class="media-price">{{ number_format($prod->price) }} đ</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
@section('after_scripts')
    <script>
        $(document).ready(function () {
            $('.bootstrap-touchspin-up').click(function () {
                var cart_qty = $('.cart_qty').val();
                $('.cart_qty').val(++cart_qty);
            });
            $('.bootstrap-touchspin-down').click(function () {
                var cart_qty = $('.cart_qty').val();
                if (cart_qty > 1) {
                    $('.cart_qty').val(--cart_qty);
                }
            });
            $('.buy_now').click(function () {
                $('.addcart').attr('action', "{{ route('product.buynow') }}");
            });
            $('.cart_submit').click(function () {
                $('.addcart').attr('action', "{{ route('product.addcart') }}");
            });
        });
    </script>
@endsection