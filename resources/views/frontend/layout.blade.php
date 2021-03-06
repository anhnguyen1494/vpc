<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/frontend/images/icon.png') }}" rel="shortcut icon" type="image/png"/>
    <meta name="description" content="Công ty Văn Phong Camera cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc, giao hàng tận nơi, hướng dẫn tận tình">
    <meta name="keywords" content="phan phoi camera, lap dat camera,Camera,camera ip,camera quan sat,tong dai,tong dai noi bo,pabx,bao trom,thiet bi kiem soat cua,bo dam,chuong cua man hinh,bao chay,may fax,cap quang,cap mang,router,switch,wireless">
    <meta property="fb:app_id" content="" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <title>
        @hasSection('title')
            @yield('title') | Văn Phong Camera
        @else
            Trang chủ | Văn Phong Camera
        @endif
    </title>
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @yield('before_styles')
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=vietnamese" rel="stylesheet">--}}
    <link href="{{ asset('/packages/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/frontend/css/main.css').'?'.time() }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/vendor/backpack/bootstrap-iconpicker/icon-fonts/font-awesome-4.0.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5bb327e8b033e9743d01f2e9/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '214876742398331');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=214876742398331&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T2XHVV6');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2XHVV6"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('after_styles')
</head>
<body>
<div class="wrapper">
    @include('frontend.includes.menu_xs')
    @include('frontend.includes.top_header')
    @include('frontend.includes.slider_mobile')
    @include('frontend.includes.menu')
    @yield('main')
    @include('frontend.includes.footer')
</div>
@include('frontend.includes.contact_right')
@include('frontend.includes.phone_bottom')
@include ('frontend.includes.partials.params')
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
                                <p>Tel: {{ $share['settings']['phone'] }}</p>
                                <a style="float:left" href="skype:{{ $share['settings']['skype'] }}?chat" class="icons skype"><i
                                            style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('before_scripts')
<script src="{{ asset('/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/packages/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/packages/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/frontend/js/lazyload.min.js') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
    var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
    });
</script>
<script src="{{ asset('/frontend/js/notify.js') }}"></script>
<script src="{{ asset('/frontend/js/main.js') }}"></script>

@yield('after_scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script type="text/javascript">
    function lookup(keyword) {
        var keyword = document.getElementById("searchSgg").value;
        if(keyword.length == 0) {
            $('#autoSuggestionsList').fadeOut(400);
        } else {
            $.post("{{ route('search-ajax') }}",
                {keyword : keyword},
                function(data){
                    var url = "{{ url('/') }}";
                    console.log(data, data.message.length);
                    if(data.message.length > 0) {
                        $('#autoSuggestionsList').fadeIn(400);
                        // var obj = jQuery.parseJSON(data);
                        var obj = data.message;
                        var strhtml = '';
                        //$('#autoSuggestionsList').html(data['message']);
                        strhtml += '<div class="sgg-outer">';
                        $.each(obj, function( index, value ) {
                                //alert(obj.message[i].value);
                                //append
                                strhtml += '<div class="sgg-row">';
                                strhtml += '<div class="sgg-image"><img width="50" height="50" src="'+url+'/' + value.image + '"/></div>';
                                strhtml += '<div class="sgg-right">';
                                strhtml += '<div class="sgg-title"><a href="'+url+'/san-pham/' + value.slug +'">' + value.name + '</a></div>';
                                strhtml += '<div class="sgg-sellprice">' + parseFloat(value.price).toFixed().replace(/./g, function(c, i, a) {return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c;}) + ' đ</div>';
                                strhtml += '</div>';
                                strhtml += '</div>';
                        });
                        strhtml += '</div>';
                        $('#autoSuggestionsList').html(strhtml);
                    } else {
                        var strhtml = '';
                        strhtml += '<div class="sgg-outer">';
                        strhtml += '<div class="sgg-row">';
                        strhtml += '<div class="sgg-title"><a>Không có sản phẩm nào tương ứng</a></div>';
                        strhtml += '</div>';
                        strhtml += '</div>';
                        $('#autoSuggestionsList').html(strhtml);
                    }
                });
            // Ajax_Suggestion(keyword);
        }
    }
</script>
@if(session('error'))
    <script>
        $(document).ready(function () {
            $.notify("{{ session('error') }}", "error");
        });
    </script>
@endif
@if(session('message'))
    <script>
        $(document).ready(function () {
            $.notify("{{ session('message') }}", "info");
        });
    </script>
@endif
@if(session('success'))
    <script>
        $(document).ready(function () {
            $.notify("{{ session('success') }}", "success");
        });
    </script>
@endif
</body>
</html>