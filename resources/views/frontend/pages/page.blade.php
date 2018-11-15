@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/product.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('meta')
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $article->title }}"/>
    <meta property="og:image" content="{{ asset('/frontend/images/logo-vpc.png') }}"/>
    <meta property="og:description" content="Công ty Văn Phong Camera cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <div class="">
                    <nav>
                        <div class="nav nav-tabs custom-tabs2" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                               role="tab" aria-controls="nav-home" aria-selected="true">{{ $article->title }}</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="header3">Các thông tin khác</span>
                @foreach($articles as $arti)
                    <div class="media products">
                        @if(is_object($arti->category))
                            <div class="media-left">
                                <a href="{{ route('frontend.page.show', $arti->slug) }}">
                                    <img class="media-object lazy" alt="{{ $arti->title }}" style="width: 70px; height: 70px"
                                         data-src="{{ asset('/'.$arti->image).'?'.time() }}">
                                </a>
                            </div>
                        @endif
                        <div class="media-body">
                            <a href="{{ route('frontend.page.show', $arti->slug) }}">
                                <h4 class="media-heading" @if(!is_object($arti->category)) style="color: #4267b2" @endif>{{ $arti->title }}</h4>
                            </a>
                            @if(is_object($arti->category))
                                <span class="media-price">{{ $arti->category->name }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
@section('after_scripts')
@endsection