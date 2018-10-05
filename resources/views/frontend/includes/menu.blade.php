<div class="container menu">
    <div class="row">
        <div class="col-md-4 col-lg-3 hidden-xs hidden-sm" style="padding-right:0;">
            <div id="prd-cate-list">
                <div class="prd-cate-header">
                    <span>Danh mục sản phẩm<i class="fa fa-chevron-circle-down"></i></span>
                </div>
                <ul class="sub-page" style="{{ !Request::is('/') ? 'display:none' : '' }}">
                    <ul>
                        @foreach($share['categorys'] as $key => $cate)
                            <li>
                                <a href="{{ route('category',$cate->slug) }}">
                                    <img alt="{{ $cate->name }}" src="{{ asset($cate->image).'?'.time() }}">
                                    <span class="mc_title">{{ $cate->name }}<i class="fa fa-chevron-right hidden-md"></i></span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12">
            <div class="row">
                <div class="col-lg-8 col-xs-12" style="padding:0;">
                    <div id="searchform">
                        <form action="/tim-kiem" accept-charset="utf-8" method="get">
                            <input type="text" name="t" value="" id="searchSgg" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ...">                                                <input type="submit" name="submit_search" value="Tìm kiếm" id="search_btn" class="searchbutton">                                                <div class="clear"></div>
                            <div class="autoSuggestionsList_l" id="autoSuggestionsList">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 hidden-xs hidden-sm" style="padding-left:0;">
                    <button type="button" class="btn btn-danger button-support" data-toggle="modal" data-target="#supportonlineModal">
                        <img class="lazy" data-src="{{ asset('/frontend/images/yahoo-smile.png').'?'.time() }}">&nbsp;Hỗ trợ trực tuyến
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>