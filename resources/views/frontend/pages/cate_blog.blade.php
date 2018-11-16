@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/product.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/frontend/css/cate_blog.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('meta')
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $cate->name }}"/>
    <meta property="og:image" content="{{ asset('/frontend/images/logo-vpc.png') }}"/>
    <meta property="og:description"
          content="Công ty Văn Phong Camera cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="ScrollTo2" class="article_header my-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li>
                            <a href="{{ route('frontend.category',$cate->slug) }}">{{ $cate->name }}</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="">
                    <nav>
                        <div class="nav nav-tabs custom-tabs2" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                               role="tab" aria-controls="nav-home" aria-selected="true">{{ $cate->name }}</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            @foreach($articles as $article)
                                <div class="media news2">
                                    <div class="row" style="width: 100%;margin-left: 0;">
                                        <div class="col-xs-12 col-md-4 full-right">
                                            <div class="media-left">
                                                <a href="{{ route('frontend.article.show',['slug_cate' => $cate->slug, 'slug_article' => $article->slug ]) }}">
                                                    <img class="media-object" alt="{{ $article->title }}" style="max-height: 178px;width: 100%"
                                                         src="{{ asset('/'.$article->image).'?'.time() }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-8">
                                            <div class="media-body">
                                                <a href="{{ route('frontend.article.show',['slug_cate' => $cate->slug, 'slug_article' => $article->slug ]) }}">
                                                    <h4 class="media-heading">
                                                        {{ $article->title }}
                                                    </h4>
                                                </a>
                                                <span class="media-date">{{ date('d/m/Y | H:i',strtotime($article->created_at)) }}</span>
                                                <span class="media-desc">
                                                    {{ $article->desc_short }}
                                                    <a href="{{ route('frontend.article.show',['slug_cate' => $cate->slug, 'slug_article' => $article->slug ]) }}"
                                                            title="" style="background: #d36262;
                                                            padding: 2px 10px;
                                                            border-radius: 6px;
                                                            color: #fff; float: right;">+ Xem thêm</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{ $articles->links() }}
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="header3">Danh mục blog</span>
                @foreach($cate_all as $cat)
                    <a href="{{ route('frontend.category',$cat->slug) }}">
                        <h4 class="media-heading-r"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>{{ $cat->name }}</h4>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
@section('after_scripts')
@endsection