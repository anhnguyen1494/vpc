<div class="container">
    <div class="col-md-9 hidden-xs hidden-sm offset-md-3 banner">
        <div class="row">
            <div id="slider-left" class="carousel slide col-md-8" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#slider-left" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-left" data-slide-to="1"></li>
                    <li data-target="#slider-left" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href=""><img class="d-block w-100" src="{{ asset('./frontend/images/slider/lap-camera-tron-bo-khuyen-mai-2018.jpg') }}" alt="First slide"></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img class="d-block w-100" src="{{ asset('./frontend/images/slider/camera-benco-gia-re.jpg') }}" alt="Second slide"></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img class="d-block w-100" src="{{ asset('./frontend/images/slider/lap-dat-mang-fpt.jpg') }}" alt="Third slide"></a>
                    </div>
                </div>
                {{--<a class="carousel-control-prev" href="#slider-left" role="button" data-slide="prev">--}}
                    {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                {{--</a>--}}
                {{--<a class="carousel-control-next" href="#slider-left" role="button" data-slide="next">--}}
                    {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                {{--</a>--}}
            </div>
            <div class="col-md-4 banner-left">
                <a href=""><img src="{{ asset('./frontend/images/slider/lap-mang-fpt.jpg') }}" alt="" class="d-block w-100"></a>
                <a href=""><img src="{{ asset('./frontend/images/slider/doi-camera-cu-lay-moi.jpg') }}" alt="" class="d-block w-100"></a>
            </div>
        </div>
    </div>

</div>