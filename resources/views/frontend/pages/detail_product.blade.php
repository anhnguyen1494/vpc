@extends('frontend.layout')

@section('after_styles')
    <link href="{{ asset('/frontend/css/product.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container">
        <div class="col-xs-12 pad-btm">
            <div class="col-xs-12">
                <div id="ScrollTo2" class="article_header my-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="http://fptcamera.vn/">Trang chủ</a></li>
                        <li><a href="http://fptcamera.vn/camera-tron-bo">Camera trọn bộ</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <div class="" style="width:100%;background:#fff;border:1px solid #ccc;padding:10px;">
                            <a data-toggle="modal" data-target=".bs-example-modal-lg">
                                <img style="cursor:pointer;display:block;margin:0 auto;background:#fff;"
                                     alt="tron-bo-1-camera-hd-tvi-hikvision"
                                     src="{{ asset('/frontend/images/tron-bo-1-camera-hd-tvi-hikvision.jpg') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="prd-desc equalheight1" style="height: 313px;">
                            <h1 class="header2">
                                Lắp đặt 1 camera HIKVISION </h1>
                            <div class="clear"></div>
                            <p>Mã sản phẩm: <b>HIK-01</b></p>
                            <p>Thương hiệu: <a href="http://fptcamera.vn/camera-hikvision">Camera Hikvision</a></p>
                            <p>Giá thị trường: <span class="detail-oldprice">2.850.000 đ</span></p>
                            <p>Giá bán: <span class="detail-price">1.999.000 đ</span></p>
                            <p>Tình trạng: <span class="detail-stock">Còn hàng</span></p>
                            <p>Bảo hành: <span class="detail-stock">24 Tháng</span></p>
                            <div class="clear"></div>
                            <form action="http://fptcamera.vn/addcart" class="addcart" method="post"
                                  accept-charset="utf-8">
                                <input type="hidden" name="id" value="420">

                                <input type="hidden" name="name" value="Lắp đặt 1 camera HIKVISION">

                                <input type="hidden" name="price" value="1999000">

                                <input type="hidden" name="SKU" value="HIK-01">

                                <input type="hidden" name="image"
                                       value="san-pham/tron-bo-1-camera-hd-tvi-hikvision.jpg">

                                <input type="hidden" name="slug" value="lap-dat-1-camera-hikvision">
                                <p>Số lượng:
                                    <span class="detail-spinner">
                                        <span class="container-detail">
                                            <input type="text" name="qty" value="1" class="cart_qty form-control"
                                                   style="display: block;">
                                            <span class="input-group-btn-vertical">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </span>
                                </p>
                                <input type="submit" name="action" value="Mua ngay" class="cart_submit"></form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <div class="hidden-xs">
                    <nav>
                        <div class="nav nav-tabs custom-tabs2" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                               role="tab" aria-controls="nav-home" aria-selected="true">Chi tiết sản phẩm</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                               role="tab" aria-controls="nav-profile" aria-selected="false">Thông số kĩ thuật</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                               role="tab" aria-controls="nav-contact" aria-selected="false">Chương trình khuyến mãi</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">...1
                            <div class="prd-body">
                                <h2><span style="color:#0000CD;"><span style="font-size:20px;">Lắp đặt camera hãng HIKVISION hàng nhập khẩu chính ngạch</span></span><br>
                                    &nbsp;</h2>

                                <p><strong><a href="http://fptcamera.vn/camera-hikvision"><span style="color:#FF0000;">HÃNG CAMERA HIKVISION</span></a></strong> là một trong những nhà cung cấp hàng đầu thế giới về các sản phẩm giám sát hình ảnh và các giải pháp. Được thành lập vào năm 2001, hiện nay Camera Hikvision là doanh nghiệp toàn cầu với hơn 14.500 nhân viên – trong đó có 5.400 kỹ sư Nghiên cứu &amp; Phát triển (R&amp;D). Sản phẩm của công ty có chất lượng cao, đạt các tiêu chuẩn quốc tế: ISO, CE, CCC, UL, FCC, RoHS… Những sản phẩm này đã được sử dụng tại hơn 100 quốc gia.</p>

                                <p style="text-align: center;"><img alt="hang-camera-hikvision-toan-cau" src="/resources/uploads/images/hang-camera-hikvision-toan-cau.jpg" style="margin-top: 15px; margin-bottom: 15px; border-width: 1px; border-style: solid;"></p>

                                <p><span style="color:#FF0000;">Giải pháp của Camera Hikvision</span> được tin cậy và sử dụng tại các công trình lớn trên khắp thế giới: Sân vận động tổ chim (Bắc Kinh – Trung Quốc); Hệ thống giao thông công cộng London – Anh; Hệ thống giám sát thành phố tại Singapore – Safe City với hơn 100.000 camera IP…</p>

                                <p><span style="color:#FF0000;">Trụ sở chính đặt tại Hàng Châu</span>, Trung Quốc, Hikvision vươn ra toàn cầu với 17 chi nhánh tại các nước: Hoa Kỳ, Hà Lan, Ý, Anh, Singapore, Australia, Brazil, Nam Phi và Dubai…; công ty liên doanh tại Ấn Độ và Nga; 32 chi nhánh trên toàn Trung Quốc và một trung tâm bảo hành tại Hồng Kông. Một nhà máy sản xuất mới được xây dựng vào cuối năm 2015 với diện tích tới 320.374m2 tại Hàng Châu.<br>
                                    &nbsp;</p>

                                <p><strong><span style="font-size:18px;"><span style="color:#0000FF;">Camera FPT VIỆT NAM đối tác chính HIKVISION</span></span></strong></p>

                                <p><strong><span style="color:#FF0000;">Công ty FPT Việt Nam</span></strong> đại lý chính thức của Hãng Camera Hikvision đơn vị phân phối và thi công <a href="http://fptcamera.vn/"><span style="color:#000000;">lắp đặt camera giám sát</span></a>, sản phẩm chính hãng nhập khẩu nguyên chiếc tại Hikvision<br>
                                    &nbsp;</p>

                                <h3><span style="color:#0000FF;"><span style="font-size:18px;"><strong>Trọn bộ Camera HD HIKVISION Nhập khẩu bao gồm:</strong></span></span></h3>

                                <p><img alt="/camera-HD-TVI-hikvision-DS-2CE56C0T-IR1.jpg" src="/resources/uploads/images/automatic/san-pham/camera-HD-TVI-hikvision-DS-2CE56C0T-IR1.jpg" style="line-height: 20.8px; float: right;"></p>

                                <div>
                                    <h4><span style="font-size:16px;"><a href="http://fptcamera.vn/camera-quan-sat"><span style="color:#FF0000;">Camera quan sát HD</span></a></span><span style="color:#FF0000;"><span style="font-size:16px;"> thương hiệu Hikvision</span></span></h4>

                                    <div>
                                        <div>
                                            <div>
                                                <p>+ Camera loại bán cầu hoặc thân&nbsp;ngoài trời<br>
                                                    + Cảm biến: 1/3" Progressive hồng ngoại&nbsp; 20m 1 MP.<br>
                                                    + Độ phân giải: 1 Megapixel.<br>
                                                    +&nbsp;Hồng ngoại: 20m. Độ nhạy sáng 0.1 Lux@F1.2.<br>
                                                    + Ống kính: 3.6mm hoặc 6mm (Đặt hàng 2.8mm)<br>
                                                    + Hỗ trợ: Bù ngược sáng BLC, Giảm nhiễu DNR, Hồng ngoại thông minh,</p>

                                                <h4><span style="color:#FF0000;"><span style="font-size:16px;">Đầu ghi hình 4 kênh HD thương hiệu Hikvision</span></span></h4>

                                                <p>+ Đầu ghi hình 4/8/16 kênh HDMI Mới với thiết kế&nbsp; trang nhã, nhỏ gọn. màu trắng .<br>
                                                    +&nbsp;Chuẩn nén video H.264.Độ phân giải ghi max: 1MP/ 25FPS<br>
                                                    +&nbsp;Cổng ra HDMI và VGA vớiĐộ phân giải 1280x720P.<br>
                                                    +&nbsp;Hai luồng dữ liệu độc lập Dual Stream (Cho phép đặt ở chế° ghi tại chỗ và xem qua mạng thông số tối ưu nhất)<br>
                                                    +&nbsp;1 kênh audio. 1 đầu ra VGA, 1 đầu ra HDMI, . Hai cổng USB2.0. Tối đa 128 người truy cập cùng lúc.<br>
                                                    +&nbsp;Độ phân giải ghi: 1MP/ 25FPS Hỗ trợ 1 ổ HDD dung lượng tối đa 6TB.<br>
                                                    +&nbsp;Nguồn 12VDC. Kèm chuột. Miễn phí 1 host chính hãng trọn đời sản phẩm. Lưu ý: Không hỗ trợ cổng RS485 và không hỗ trợ Ghi thêm IP camera.</p>

                                                <p><span style="color:#FF0000;"><span style="font-size:16px;">Ổ lưu dữ liệu chuyên dụng cho camera</span></span></p>

                                                <p>Ổ chuyên dụng dành cho camera lưu trữ trong&nbsp;<strong>thời gian 1 tuần</strong>. Khuyến khích khách hàng sử dụng&nbsp;ổ cứng chuyên dụng&nbsp;Western Digital của Mỹ Hoặc ổ cứng chuyên dụng Seagate của Thái Lan cho các hệ thống cho camera.</p>

                                                <p>Ổ chuyên dụng giúp cho hệ thống hoạt động ổn định hơn, tuổi thọ sử dụng cao hơn, an toàn dữ liệu&nbsp; hơn, tối ưu, tiết kiệm chi phí hơn.</p>

                                                <p><strong><span style="color:#FF0000;">Phụ kiện kèm theo đầy đủ cho lắp 1 camera</span></strong>:&nbsp;1 Nguồn 12V-2A + 2 bộ Jack BNC chống nhiễu&nbsp; + 10m dây cáp.</p>

                                                <p>&nbsp;</p>

                                                <h3 style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; font-size: 15px; text-align: justify;"><span style="font-size: 18px;"><span style="color: rgb(0, 0, 255);">Bảng giá niêm yết khuyến mãi</span></span></h3>

                                                <table border="1" cellpadding="10" cellspacing="10" style="background-color:transparent;border-collapse:collapse;border-spacing:0px;box-sizing:border-box;font-family:helvatica,sans-serif;font-size:15px;line-height:20.8px;margin:0px;max-width:100%;outline:0px;padding:0px;text-align:justify;width:100%;">
                                                    <tbody style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                            <p>Bộ 1 camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">&nbsp;&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">Giá: 1,999,</span></span></strong></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                                        </td>
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 5 camera HIKVISION&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">Giá:&nbsp; 4,999,000</span></strong>đ</span></span></td>
                                                    </tr>
                                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                            <p>Bộ 2 camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">Giá: 2,599,</span></strong></span></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                                        </td>
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 6&nbsp;camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">Giá: &nbsp;5,599,000</span></strong>đ</span></span></td>
                                                    </tr>
                                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                            <p>Bộ 3 camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: 3,399,</strong></span></span></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                                        </td>
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 7 camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: &nbsp;6,199,000</strong></span>đ</span></span></td>
                                                    </tr>
                                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                                            <p>Bộ 4 camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: 4,199,</strong></span></span></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                                        </td>
                                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 8 camera HIKVISION<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: &nbsp;6,799,000</strong></span>đ</span></span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <h3><strong><span style="color:#0000FF;"><span style="font-size:18px;">Quy định &amp; Chính sách bảo hành tại FPT</span></span></strong></h3>

                                                <p>+&nbsp;<strong><span style="color:#FF0000;">Bảo hành 24 tháng</span></strong>&nbsp;(12 tháng đầu tiên bảo hành lắp đặt camera 1 đổi 1 tận nơi +&nbsp;12 tháng bảo trì, bảo dưỡng, vệ sinh thiết bị miễn phí). Sau thời gian bảo hành tính phí dịch vụ.<br>
                                                    +&nbsp;<strong><span style="color:#FF0000;">Tùy chọn nâng cấp camera</span></strong>:&nbsp;Quý khách có thể lựa chọn camera, đầu ghi hình khác giá trị tương đương để thay thế.<br>
                                                    +&nbsp;<span style="color:#FF0000;"><strong>Hệ thống giá niêm yết:</strong></span>&nbsp;Dây cáp tín hiệu 5C chống nhiễu 5.000đ/mét, dây điện nguồn 5.000đ/mét, dây cáp mạng 5.000đ /mét. (Tính theo thực tế sử dụng do phát sinh ngoài khuyến mãi).<br>
                                                    + Gói khuyến mãi trọn bộ Camera giá rẻ này&nbsp;chưa bao gồm thuế <strong>VAT 10%</strong>.</p>

                                                <p style="text-align: center;"><br>
                                                    <strong style="color: rgb(0, 0, 255); font-size: 18px; line-height: 28.8px; text-align: center;"><img alt="tron-bo-camera-hikvision" src="/resources/uploads/images/tron-bo-camera-hikvision.jpg" style="margin-top: 15px; margin-bottom: 15px;"></strong></p>

                                                <p><span style="font-size:16px;"><span style="color:#FF0000;">* Khách hàng cần lưu ý sản phẩm khi lắp đặt hệ thống camera:</span></span></p>

                                                <p>- <span style="color:#FF0000;"><strong>Hiện nay trên thị trường</strong></span> có rất nhiều gói&nbsp;camera trọn bộ giá rẻ&nbsp;không ghi rõ model hãng sản xuất chất lượng không đảm bảo, Khách hàng không nên mua những sản phẩm đó vì không kiểm tra được chất lượng sản phẩm mình mua.</p>

                                                <p>- <span style="color:#FF0000;"><strong>Từ những nhu cầu và mục đích</strong></span> sử dụng khác nhau khi lắp đặt camera của nhiều khách hàng, chúng tôi sẽ tư vấn, hỗ trợ khách hàng lựa chọn,&nbsp;lắp đặt&nbsp;camera cho&nbsp;phù hợp nhất, giá thành thấp&nbsp;và cách lắp đặt camera ở những vị trí nào sao cho hiệu quả nhất mà lại an toàn, an ninh.</p>

                                                <p>-<span style="color:#FF0000;"><strong> Với nhiều năm kinh nghiệm</strong></span>&nbsp;phân phối,&nbsp;lắp đặt camera&nbsp;cùng với đội ngũ kỹ thuật viên giàu kinh nghiệm, Fpt Camera&nbsp;đã trở thành địa chỉ uy tín hàng đầu trên cả nước được khách hàng tín nhiệm.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>&nbsp;</p>

                                <hr>
                                <h3><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="color: rgb(255, 102, 0);">&#8203;</span></strong><strong><span style="color: rgb(255, 102, 0);">Fpt cam kết sản phẩm và&nbsp;dịch vụ&nbsp;</span><a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-tai-ha-noi"><span style="color: rgb(255, 102, 0);">lắp đặt camera</span></a><span style="color: rgb(255, 102, 0);">&nbsp;uy tín:</span></strong></span></h3>

                                <ol style="line-height: 20.7999992370605px;">
                                    <li><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(255, 0, 0);">Sản phẩm đúng như mô tả trên website (về màu sắc, kiểu dáng, chức năng, giá cả).</span></span></li>
                                    <li><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(255, 0, 0);">Giao hàng tận nơi khu vực Hà Nội và ship hàng Toàn Quốc.</span></span></li>
                                    <li><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(255, 0, 0);">Bảo hành từ 12 đến 24 tháng tùy theo chủng loại sản phẩm.</span></span></li>
                                    <li><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(255, 0, 0);">Hỗ trợ, tư vấn, thông tin, giá cả, mua bán sản phẩm hãy liên hệ qua: Yahoo, Facebook, skype hoặc số điện thoại trên website!</span></span></li>
                                </ol>

                                <p style="text-align: center;">&nbsp;</p>

                                <p style="text-align: center;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; font-size: 16px; text-align: justify;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 18px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 51, 0);">Bảng giá khuyến mãi lắp camera trọn bộ</span></span></strong></p>

                                <p style="text-align: center;"><img alt="khuyen-mai-camera-tron-goi-hikvision-07%281%29" src="/resources/uploads/images/khuyen-mai-camera-tron-goi-hikvision-07%281%29.jpg"></p>

                                <h3 style="text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 15px; line-height: 21.4286px; text-align: justify;">&#8203;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 15px; text-align: justify; line-height: 1.6;">Liên hệ ngay với <strong>Camera FPT Việt Nam</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 15px; text-align: justify; line-height: 1.6;">&nbsp;để nhận được <strong>Báo giá <a href="http://fptcamera.vn/">camera an ninh</a></strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 15px; text-align: justify; line-height: 1.6;">&nbsp;tốt nhất thị trường.</span></span></h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            ...2
                            <div class="prd-body">
                                <table border="1" cellpadding="10" cellspacing="1" class="table" style="background-color:transparent;border-collapse:collapse;border-spacing:0px;box-sizing:border-box;font-family:helvatica,sans-serif;font-size:15px;line-height:21.4286px;margin:0px 0px 20px;max-width:100%;outline:0px;padding:0px;text-align:justify;width:100%;">
                                    <tbody style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><b style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Mã sản phẩm</b></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">Bộ 1 camera HD</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><b style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Hãng SX</b></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">HIKVISION</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><b style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bảo hành</b></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">24 tháng</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><b style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Độ phân giải</b></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">1.0 Megapixel</strong></span></td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><b style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Đầu ghi hình</b></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">1 đầu HD</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><b style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Loại camera</b></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">camera trong nhà, ngoài trời</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Camera loại chip</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">Chip CMOS</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Tốc độ ghi hình</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">25/30fps@720P - HD (1280 x 720 )</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Camera theo ống kính</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">Loại 3.6mm</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Loại đèn LEDs</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">Đèn ARRAY Led</td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Tầm xạ hồng ngoại</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Từ 15-20m</strong></span></td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">Nguồn điện</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">DC 12V</span></td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 344px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Hỗ trợ tên miền</strong></td>
                                        <td style="box-sizing: border-box; margin: 0px; padding: 8px; outline: 0px; line-height: 1.42857; vertical-align: top; border-top-width: inherit; border-top-style: inherit; border-top-color: inherit; width: 502px;">Cloud, tên miềm VIP 1 năm</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            ...3
                            <div class="prd-body">
                                <h4 style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: 'Open Sans', Tahoma, Arial, sans-serif; outline: 0px; line-height: 20.8px; font-size: 18px; text-align: justify;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; outline: 0px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 205);">Khi lắp đặt trọn bộ 1 camera HIKVISION khuyến mãi:</span></strong></span></h4>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: 'Open Sans', Tahoma, Arial, sans-serif; outline: 0px; font-size: 15px; text-align: justify; line-height: 20.8px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">* 10 mét dây tín hiệu</strong></span>&nbsp;chuyên dành cho camera giám sát có độ chống nhiễu cao.</span></p>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: 'Open Sans', Tahoma, Arial, sans-serif; outline: 0px; font-size: 15px; text-align: justify; line-height: 20.8px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; color: rgb(255, 0, 0);">*&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Tên miền xem qua mạng&nbsp;VIP</strong></span>&nbsp;xem qua mạng từ xa hoàn toàn miễn phí trọn đời</span></p>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: 'Open Sans', Tahoma, Arial, sans-serif; outline: 0px; font-size: 15px; text-align: justify; line-height: 20.8px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; color: rgb(255, 0, 0);">*&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Quý khách hàng nhận ngay</strong></span>&nbsp;150,000đ/ 1 camera nếu tự mua về lắp đặt, chúng tôi vẫn hỗ trợ cài đặt tên miền xem camera từ xa và các ưu đãi khác</span></p>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: 'Open Sans', Tahoma, Arial, sans-serif; outline: 0px; font-size: 15px; text-align: justify; line-height: 20.8px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; outline: 0px;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">* Khuyến mãi giá ưu đãi</span></strong>&nbsp;nhất(Khuyến mãi áp dụng cập nhật theo tuần, tháng được công ty niêm yết giá trên website)</span></p>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: 'Open Sans', Tahoma, Arial, sans-serif; outline: 0px; font-size: 15px; text-align: justify; line-height: 20.8px;">&nbsp;</p>

                                <h3 style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; font-size: 15px; text-align: justify;"><span style="font-size: 18px;"><span style="color: rgb(0, 0, 255);">Bảng giá niêm yết khuyến mãi</span></span></h3>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; font-size: 15px; text-align: justify;">&nbsp;</p>

                                <table align="center" border="1" cellpadding="1" cellspacing="1" style="background-color:transparent;border-collapse:collapse;border-spacing:0px;box-sizing:border-box;font-family:helvatica,sans-serif;font-size:15px;margin:0px;max-width:100%;outline:0px;padding:0px;text-align:justify;width:100%;">
                                    <tbody style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 1 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span>&nbsp; &nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">Giá: 1,999,</span></span></strong></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 2 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">Giá: 2,599,</span></strong></span></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 3 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: 3,399,</strong></span></span></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 4 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: 4,199,</strong></span></span></span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">000</span></strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;">đ</span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 5 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">Giá: 4,999,000</span></strong>đ</span></span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 6&nbsp;camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);">Giá: &nbsp;5,599,000</span></strong>đ</span></span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 7 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: &nbsp;6,199,000</strong></span>đ</span></span></p>
                                        </td>
                                    </tr>
                                    <tr style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">
                                        <td style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; text-align: center;">
                                            <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; outline: 0px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Bộ 8 camera&nbsp;</span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">HIKVISION</strong></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(0, 0, 255);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">&nbsp;HD</strong></span></span><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 16px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; line-height: 20.8px;">&nbsp;&nbsp;&nbsp;<span style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; color: rgb(255, 0, 0);"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px;">Giá: &nbsp;6,799,000</strong></span>đ</span></span></p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <p style="box-sizing: border-box; margin: 10px 0px; padding: 0px; font-family: helvatica, sans-serif; outline: 0px; font-size: 15px; text-align: justify;">&nbsp;</p>

                                <div>&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="header3">Sản phẩm cùng danh mục</span>
                @for($i=1;$i<7;$i++)
                <div class="media products">
                    <div class="media-left">
                        <a href="/san-pham/lap-dat-tron-bo-camera-gia-re-cho-cua-hang">
                            <img class="media-object" alt="bo-camera-hik-vision-gia-re.jpg"
                                 src="{{ asset('/frontend/images/tron-bo-1-camera-hd-tvi-hikvision.jpg') }}">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="http://fptcamera.vn/lap-dat-tron-bo-camera-gia-re-cho-cua-hang">
                            <h4 class="media-heading">Lắp đặt trọn bộ camera giá rẻ cho cửa hàng</h4>
                        </a>
                        <span class="media-price">2.990.000 đ</span>
                    </div>
                </div>
                @endfor
            </div>
        </div>

    </div>
@endsection