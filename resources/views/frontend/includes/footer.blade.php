<div class="container">
    <div id="bottom">
        <div class="bg-social">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="social-claim">
                                <div class="claim_header">Cam kết</div>
                                <div class="claim">Sản phẩm hàng hóa chính hãng, đa dạng, phong phú</div>
                                <div class="claim">Luôn luôn giá rẻ và khuyến mại không ngừng</div>
                                <div class="claim">Dịch vụ chăm sóc khách hàng uy tín, tận tâm</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="social-claim2">
                                <div class="claim_header">Hỗ trợ khách hàng</div>
                                <ul>
                                    <li><a href="#">Xem camera giám sát qua điện thoại</a></li>
                                    <li><a href="#">Xem camera quan sát qua máy tính</a></li>
                                    <li><a href="#">Download tài liệu</a></li>
                                    <li><a href="#">HD cài đặt phần mềm Teamviewer</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="social-claim2">
                                <div class="claim_header">Thông tin công ty</div>
                                <ul>
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Tuyển dụng</a></li>
                                    <li><a href="#">Chính sách</a></li>
                                </ul>
                                <div id="social_us">
                                    <div class="social_us_header">Kết nối với chúng tôi</div>
                                    <div id="f_social">
                                        <a target="_blank" rel="nofollow" href="{{ $share['settings']['facebook'] }}">
                                            <img class="lazy" data-src="{{ asset('/frontend/images/f_fb.png').'?'.time() }}">
                                        </a>
                                        <a target="_blank" rel="nofollow" href="{{ $share['settings']['google'] }}">
                                            <img class="lazy" data-src="{{ asset('/frontend/images/f_gplus.png').'?'.time() }}">
                                        </a>
                                        <a target="_blank" rel="nofollow" href="{{ $share['settings']['youtube'] }}">
                                            <img class="lazy" data-src="{{ asset('/frontend/images/f_yt.png').'?'.time() }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="social-claim2">
                                <div class="claim_header">Tổng đài trợ giúp</div>
                                <div style="margin:10px;">
                                    <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td><img alt="" class="lazy" data-src="{{ asset('/frontend/images/tro-giup.png').'?'.time() }}"
                                                     style="width: 68px; height: 81px;"></td>
                                            <td style="vertical-align: middle;">
                                                <p style="margin-bottom: 0"><span style="color:#333333;"><span style="font-size:14px;">Tư vấn bán hàng</span></span>
                                                </p>

                                                <p><span style="color:#ba0000;"><a href="tel:{{ $share['settings']['phone'] }}"
                                                                                   style="font-size:20px;"><strong>{{ $share['settings']['phone'] }}</strong></a></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <hr>
                                                <span style="color:#555555;"><span style="font-size:13px;"><img
                                                                alt=""
                                                                class="lazy" data-src="{{ asset('/frontend/images/life_saver.png').'?'.time() }}">  Chăm sóc và hỗ trợ sau bán hàng</span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <span
                                                        style="color:#B22222;">
                                                    <strong><a href="tel:{{ $share['settings']['phone'] }}" style="font-size:16px;">{{ $share['settings']['phone'] }}</a></strong>
                                                    @if(!empty($share['settings']['phone2'])) - @endif
                                                    <strong><a href="tel:{{ $share['settings']['phone2'] }}" style="font-size:16px;">{{ $share['settings']['phone2'] }}</a></strong>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <span style="font-size:13px;">
                                                    <a href="mail:{{ $share['settings']['email'] }}" style="color:#4267b2;">
                                                        <img alt="" class="lazy" data-src="{{ asset('/frontend/images/mailer.png').'?'.time() }}">
                                                        {{ $share['settings']['email'] }}
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-xs-0 col-md-12">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <div class="f-logo" style="max-width: 206px;border: 3px solid black">
                            <a href="{{ route('home') }}">
                                <img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ"
                                     alt="Camera Văn Phong tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc"
                                     class="lazy" data-src="{{ asset('/frontend/images/logo-vanphong-bot.png').'?'.time() }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="f-address">
                            <p>
                                <span style="color:black;">
                                    <strong>CỬA HÀNG CAMERA DỊCH VỤ TẠI HÀ NỘI</strong></span><span
                                        style="color:#FF8C00;"><strong> </strong>
                                </span><br>
                                Địa chỉ : <span style="color:black;">{{ $share['settings']['address'] }}</span><br>
                                Điện thoại : <span style="color:black;">{{ $share['settings']['phone'] }}</span><br>
                                Website : <span style="color:black;">{{ $share['settings']['website'] }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="f-address">
                            <p><span style="color:black;">Hiện chúng tôi có các điểm dịch vụ như: </span></p>
                            <p>
                                <a href="#">
                                    <span style="color:black;">Lắp đặt camera tại Hà Nội</span>
                                </a>
                            </p>
                            <p style="text-align: right;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="col-md-12" style="        text-align: center;
        color: #000;
        font-size: 14px;
        font-weight: bold;
        padding: 10px 0;">Copyright © 2018. All Rights Reserved by VanPhongCamera</div>