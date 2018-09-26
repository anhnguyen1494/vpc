<div class="container" style="width: 600px;">
    <p>Date: {{ date('d/m/Y H:i:s',time()) }}</p>
    <p style="font-size: 24px;color: #4267b2">Kiểm tra đơn hàng: <a href="{{ route('backend.order.detail',$order->id) }}">tại đây</a></p>
    <h2 style="text-align: center;margin: 15px auto;">Thông tin khách hàng</h2>
    <h3>Thông tin khách hàng</h3>
    <p>Họ tên thanh toán: {{ $order->name1 }} </p>
    <p>Số điện thoại: {{ $order->phone1 }} </p>
    <p>Địa chỉ: {{ $order->address1 }} @if(!empty($order->district1)) ,{{ $order->district1 }} @endif
        @if(!empty($order->city1)), {{ $order->city1 }} @endif  </p>
    <hr>
    @if(!empty($order->name2))
        <p>Họ tên nhận hàng: {{ $order->name2 }} </p>
        <p>Số điện thoại: {{ $order->phone2 }} </p>
        <p>Địa chỉ: {{ $order->address2 }} @if(!empty($order->district2)) ,{{ $order->district2 }} @endif
            @if(!empty($order->city2)), {{ $order->city2 }} @endif  </p>
    @endif
    <h3>Thông tin đơn hàng: </h3>
    <table class="table" border="1" cellpadding="10">
        <tbody>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        @foreach($order->order_details as $key => $product)
            <tr>
                <td>
                    {{ $key + 1 }}
                </td>
                <td>
                    <a href="{{ route('product.show', $product->product->slug) }}">
                        <b>{{ $product->prod_name }}</b>
                    </a>
                </td>
                <td>{{ number_format($product->price) }}</td>
                <td style="width:92px;">
                    {{ $product->quantity }}
                </td>
                <td>{{ number_format($product->price * $product->quantity) }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">Tổng cộng</td>
            <td style="color:#4267b2;font-weight:bold;">{{ number_format($order->total_price) }} VNĐ</td>
        </tr>
        </tbody>
    </table>
</div>