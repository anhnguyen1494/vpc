<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/frontend/images/icon.png') }}" rel="shortcut icon" type="image/png"/>
    <meta name="description" content="Công ty Văn Phong Camera cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
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
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=vietnamese" rel="stylesheet">
    <link href="{{ asset('/packages/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/frontend/css/main.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/vendor/backpack/bootstrap-iconpicker/icon-fonts/font-awesome-4.0.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5b74e8b9f31d0f771d83d621/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
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
@include ('frontend.includes.partials.params')
@yield('before_scripts')
<script src="{{ asset('/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/packages/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/packages/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
                                strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://vanphongcamera.vn/' + value.image + '"/></div>';
                                strhtml += '<div class="sgg-right">';
                                strhtml += '<div class="sgg-title"><a href="http://vanphongcamera.vn/san-pham/' + value.slug +'">' + value.name + '</a></div>';
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