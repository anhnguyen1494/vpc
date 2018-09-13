<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
	<div class="row">
		<div class="col-md-12">
			<strong>Ảnh:</strong> <img src="{{ asset('/'.$entry->image) }}" alt="" width="100px"><br>
			<strong>Mã sản phẩm:</strong> {!!  $entry->code_pro !!} <br>
			<strong>Thương hiệu:</strong> {!!  $entry->trademark !!} <br>
			<strong>Bảo hành:</strong> {!!  $entry->guarantee !!} tháng<br>
			<strong>Giá bán:</strong> {{ number_format($entry->price) }} VNĐ<br>
			<strong>Giá thị trường:</strong> {{ number_format($entry->price_real) }} VNĐ<br>
			<strong>Meta title:</strong> {!!  $entry->meta_title !!}<br>
			<strong>Meta description:</strong> {!!  $entry->meta_description !!}<br>
			<strong>Meta keywords:</strong> {!!  $entry->meta_keywords !!}<br>
			<strong>Ngày tạo:</strong> {{ date('H:i:s d/m/Y',strtotime($entry->created_at)) }} <br>
			<strong>Cập nhật:</strong> {{ date('H:i:s d/m/Y',strtotime($entry->updated_at)) }} <br>
		</div>
	</div>
</div>
<div class="clearfix"></div>