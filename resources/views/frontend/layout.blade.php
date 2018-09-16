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
    @include('frontend.includes.menu')
    @yield('main')
    @include('frontend.includes.footer')
</div>
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
            $.post("http://fptcamera.vn/ajaxhandle/client_products_ajaxhandler/Ajax_Get_All_Product_Client",
                {keyword : keyword},
                function(data){
                    if(data.length > 14) {
                        $('#autoSuggestionsList').fadeIn(400);
                        // var obj = jQuery.parseJSON(data);
                        var obj = JSON.parse(data);
                        var strhtml = '';
                        //$('#autoSuggestionsList').html(data['message']);
                        strhtml += '<div class="sgg-outer">';
                        for(var index in obj) {
                            //alert(obj.message[1].label);
                            //alert(obj.length());
                            for(var i=0;i<obj[index].length;i++) {
                                //alert(obj.message[i].value);
                                //append
                                strhtml += '<div class="sgg-row">';
                                strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/thumbs/' + obj.message[i].Image + '"/></div>';
                                strhtml += '<div class="sgg-right">';
                                strhtml += '<div class="sgg-title"><a href="http://fptcamera.vn/' + obj.message[i].Slug + '">' + obj.message[i].Title + '</a></div>';
                                strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].SellPrice).toFixed().replace(/./g, function(c, i, a) {return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c;}) + ' đ</div>';
                                strhtml += '</div>';
                                strhtml += '</div>';
                            }
                        }
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
</body>
</html>