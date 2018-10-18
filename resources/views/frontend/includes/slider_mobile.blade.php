<div style="margin-top:50px;" class="hidden-lg hidden-md">
    <div class="mobileslider">
        <div id="mobileslider" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#mobileslider" data-slide-to="0" class="active"></li>
                <li data-target="#mobileslider" data-slide-to="1"></li>
                <li data-target="#mobileslider" data-slide-to="2"></li>
                <li data-target="#mobileslider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href=""><img class="d-block w-100 lazy" data-src="{{ asset('/frontend/images/slider_mobile/banner-mobile1.jpg').'?'.time() }}" alt="First slide"></a>
                </div>
                <div class="carousel-item">
                    <a href=""><img class="d-block w-100 lazy" data-src="{{ asset('/frontend/images/slider_mobile/banner-mobile2.jpg').'?'.time() }}" alt="Second slide"></a>
                </div>
                <div class="carousel-item">
                    <a href=""><img class="d-block w-100 lazy" data-src="{{ asset('/frontend/images/slider_mobile/banner-mobile3.jpg').'?'.time() }}" alt="Third slide"></a>
                </div>
                <div class="carousel-item">
                    <a href=""><img class="d-block w-100 lazy" data-src="{{ asset('/frontend/images/slider_mobile/banner-mobile4.jpg').'?'.time() }}" alt="Four slide"></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mobileslider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mobileslider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="clear"></div>
    </div>
</div>