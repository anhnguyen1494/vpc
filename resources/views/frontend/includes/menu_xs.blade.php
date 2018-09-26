<div class="container-fluid">
    <div class="row hidden-md hidden-lg">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark custom-navbar">
            <a class="navbar-brand" href="/">
                <img alt="Camera Văn Phong Camera Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc"
                     src="{{ asset('/frontend/images/logo-vanphong-mobi.png') }}">
            </a>
            <div id="top-hotline" style="float:right;">
                <div class="name">
                    <a class="name_cart" href="/gio-hang">(<b>{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</b>)</a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @foreach($categorys as $key => $cate)
                    <li class="nav-item">
                        <a href="{{ route('category',$cate->slug) }}" class="nav-link">
                            <img alt="{{ $cate->name }}"
                                 src="{{ asset($cate->image) }}">
                            <span class="mc_title">{{ $cate->name }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>