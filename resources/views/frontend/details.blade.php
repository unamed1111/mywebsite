@extends('frontend.layout.master')
@section('underbanner')
<div class="underbanner">
	<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="/images/home/gallery2.jpg" /></div>
						  <div class="tab-pane" id="pic-2"><img src="/images/home/gallery2.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="/images/home/gallery2.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img src="/images/home/gallery2.jpg" /></div>
						  <div class="tab-pane" id="pic-5"><img src="/images/home/gallery2.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="/images/home/gallery2.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="/images/home/gallery2.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="/images/home/gallery2.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="/images/home/gallery2.jpg" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="/images/home/gallery2.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$products->product_name}}</h3>
						<h4 class="price">loại đồng hồ: {{$products->category->category_name}}</h4>
						<h4 class="price">thương hiệu: {{$products->trademark->trademark_name}}</h4>
						<h4 class="price">current price: <span>{{$products->price}}</span></h4>
						<h5><strong>Bảo hành trọn đời đối với thương hiệu</strong><br>
							<strong>Bảo hành 10 năm Các thương hiệu khác thuộc hệ thống</strong><br>
							<strong>Đã bao gồm VAT</strong>
						</h5>
						<h>Tất cả sản phẩm đều có hóa đơn bán hàng đi kèm. Quý khách nào không nhận được hóa đơn vui lòng liên hệ 123456789 hoặc 987654321
						</h5>
						<div class="action">
							<form action="{{route('cart.store')}}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{$products->id}}">
								<input type="hidden" name="product_name" value="{{$products->product_name}}">
								<input type="hidden" name="price" value="{{$products->price}}">
								<button class="add-to-cart btn btn-default" type="submit">thêm vào giỏ</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		<div class="col-xs-12">
                    <ul class="menu-items">
                        <li><h4><strong>THÔNG TIN CHI TIẾT</strong></h4></li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <small>
                            <ul>
                                <h5><li>Hãng sản xuất: Atlantic</li></h5>
                                <h5><li>Kiểu dáng: Đồng hồ nam</li></h5>
                                <h5><li>Chất liệu dây: {{$productdetails->watch_chain}}</li></h5>
                                <h5><li>Chất liệu mặt: {{$productdetails->case}}</li></h5>
                                <h5><li>Chất liệu vỏ : {{$productdetails->case}}</li></h5>
                                <h5><li>Chống nước: {{$productdetails->waterproof}} ATM</li></h5>
                                <h5><li>Bảo hành: {{$productdetails->guarantee}} năm</li></h5>                             
                                <h5><li>Năng lượng sử dụng: {{$productdetails->energy}}</li></h5>
                                <h5><li>Tư vấn và đặt hàng: 098.336.2992</li></h5>
                                <h5><li>Thanh toán: Trực tiếp khi nhận sản phẩm</li></h5>
                            </ul>  
                        </small>
                    </div>
                </div>
                <div class="clear"></div>

	</div>
</div>
@endsection