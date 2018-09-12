@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pad-btm">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="ScrollTo2" class="article_header my-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="http://fptcamera.vn/">Trang chủ</a></li>
                                <li><a href="http://fptcamera.vn/camera-tron-bo">Camera trọn bộ</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection