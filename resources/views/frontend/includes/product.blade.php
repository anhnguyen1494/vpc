<div class="col-6 col-sm-4 col-lg-3 product-item">
    <div class="thumbnail products" style="height: 253px;">
        <a href="{{ route('product.show', $product->slug) }}">
            <img
                    alt="{{ $product->name }}"
                    class="lazy" data-src="{{ asset($product->image).'?'.time() }}">
        </a>
        <div class="caption">
            <a href="{{ route('product.show', $product->slug) }}" class="trademark">{{ $product->trademark }}</a>
            <a href="{{ route('product.show', $product->slug) }}">
                <h3>{{ $product->name }}</h3></a>
            <div class="clear"></div>
            <div>
                @if($product->status == 0)
                    <span class="badge badge-success">Còn hàng</span>
                @else
                    <span class="badge badge-secondary">Hết hàng</span>
                @endif
            </div>
            <div class="container-price">
                <span class="new-price">{{ number_format($product->price) }} đ</span>
                <span class="old-price">
                    @if(!empty($product->price_real))
                        {{ number_format($product->price_real) }} đ
                    @endif
                </span>
            </div>


        </div>
    </div>
</div>