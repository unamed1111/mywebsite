@extends('frontend.layout.master')
@section('underbanner')
<div class="underbanner">
	<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						@if(session()->has('notif'))									
					<div class="alert alert-danger">
						<strong>{{session()->get('notif')}}</strong>
					</div>						
				@endif
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        @foreach(json_decode($products->detail->image) as $key => $image)
                                      <div class="item {{ $key == 0 ? "active" : "" }}">
                                        <img src="{{$image}}"  width="100%">
                                      </div>
                                        @endforeach
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$products->product_name}}</h3>
						<h4 class="price">loại đồng hồ: {{$products->category->category_name}}</h4>
						<h4 class="price">thương hiệu: {{$products->trademark->trademark_name}}</h4>
						<h4 class="price">Giá: <span>{!! number_format($products->price,2) !!}</span></h4>
						<h4 class="price">tình trạng: <span>{{$tinhtrang}}</span></h4>
						</h5>
						<h5>Mô tả : {{$products->description}}</h5>
						<h5>Tất cả sản phẩm đều có hóa đơn bán hàng đi kèm. Quý khách nào không nhận được hóa đơn vui lòng liên hệ 123456789 hoặc 987654321
						</h5>
						<div class="action">
							<form action="{{route('cart.store')}}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="{{$products->id}}">
								<input type="hidden" name="product_name" value="{{$products->product_name}}">
								<input type="hidden" name="price" value="{{$products->price}}">
								<input type="hidden" name="img" value="{{$products->detail->image}}">
								<input type="hidden" name="qty" value="{{$products->detail->total_qty}}">
								<button class="add-to-cart btn btn-default" type="submit">thêm vào giỏ</button>
							</form>
						</div>
					</div>
				</div>
			</div>
<br>				
	<div class="thongtin">  
	  <input id="tab1" type="radio" name="tabs" checked>
	  <label for="tab1">CHI TIẾT SẢN PHẨM</label>
	    
	  <input id="tab2" type="radio" name="tabs">
	  <label for="tab2">GIỚI THIỆU SẢN PHẨM</label>

	  <input id="tab3" type="radio" name="tabs">
	  <label for="tab3">GIỚI THIỆU THƯƠNG HIỆU</label>

	  <input id="tab4" type="radio" name="tabs">
	  <label for="tab4">FEEDBACK</label>
	    
	  <section id="content1">
	    <small>
            <ul>
                <h5><li>Hãng sản xuất:<i style="color: orange; font-weight: bold;"> {{$products->trademark->trademark_name}}</i></li></h5>
                <h5><li>Kiểu dáng:<i style="color: orange; font-weight: bold;"> Đồng hồ nam</i></li></h5>
                <h5><li>Chất liệu dây:<i style="color: orange; font-weight: bold;"> {{ WATCH_CHAIN[$products->detail->watch_chain]}}</i></li></h5>
                <h5><li>Chất liệu mặt:<i style="color: orange; font-weight: bold;"> {{$products->detail->glass}}</i></li></h5>
                <h5><li>Chất liệu vỏ :<i style="color: orange; font-weight: bold;"> {{ WATCH_CASE[$products->detail->case]}}</i></li></h5>
                <h5><li>Chống nước:<i style="color: orange; font-weight: bold;"> {{$products->detail->waterproof}}</i> ATM</li></h5>
                <h5><li>Bảo hành:<i style="color: orange; font-weight: bold;"> {{$products->detail->guarantee}}</i> năm</li></h5>                             
                <h5><li>Năng lượng sử dụng:<i style="color: orange; font-weight: bold;"> {{ WATCH_ENERGY[$products->detail->energy]}}</i></li></h5>
                <h5><li>Tư vấn và đặt hàng: 098.336.2992</li></h5>
                <h5><li>Thanh toán: Trực tiếp khi nhận sản phẩm</li></h5>
            </ul>  
        </small>
  	</section>
    
  	<section id="content2">
    	{{$products->description}}
  	</section>
    
  	<section id="content3">
    	<p>
      		<strong>{{$products->trademark->description}}</strong> 
    	</p>
  	</section>

    
	</div>
</div>
</div>
@endsection