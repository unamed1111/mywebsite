@extends('frontend.layout.master')
@section('underbanner')
			<div class="notifi">							
				@if(session()->has('notif'))									
					<div class="alert alert-success">
						<strong>{{session()->get('notif')}}</strong>
					</div>						
				@endif
				
				<div class="alert alert-success">
					<strong>CÓ {{Cart::count()}} SẢN PHẨM TRONG GIỎ HÀNG</strong>
				</div>
				<table id="cart" class="table table-hover table-condensed" style="background: white;">
    				<thead>
						<tr>
							<th style="width:50%">SẢN PHẨM</th>
							<th style="width:10%">GIÁ</th>
							<th style="width:8%">SỐ LƯỢNG</th>
							<th style="width:22%" class="text-center">THÀNH TIỀN</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					@foreach(Cart::content() as $item)
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs">
										<a href="{{route('details',$item->id)}}"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/>
										</a>
									</div>
									<div class="col-sm-10">
										<a href="{{route('details',$item->id)}}"><h4 style="color:black;"><strong>{{$item->name}}</strong></h4></a>
									</div>
								</div>
							</td>
							<td data-th="Price">{{$item->price}}</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="{{$item->qty}}">
							</td>
							<td data-th="Subtotal" class="text-center">{{$item->price}}</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<form action="{{route('cart.delete',$item->rowId)}}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
								<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o"></i></button>			
								</form>
							</td>
						</tr>
					</tbody>
					@endforeach
					
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>TỔNG THANH TOÁN</strong></td>
						</tr>
						<tr>
							<td><a href="{{route('index')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i>TIẾP TỤC MUA HÀNG</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>{{Cart::total()}}</strong></td>							
						</tr>
					</tfoot>
				</table>
				
				<div class="row justify-content-center col-md-6 col-sm-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">THÔNG TIN GIAO HÀNG CHO QUÝ KHÁCH HÀNG</div>
                        <div class="panel-body">
                        	<form method="POST" action="#">
                    		@csrf                      
                            <div class="form-group">
                                <div class="col-md-12"><strong>Họ và tên:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_name" class="form-control"  value="" />
                                </div>
                            </div>      
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_phone" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_email" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"></div>
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>                        
                            </form>
                        </div>
                    </div>
                </div>
</div>
                <div class="clear"></div>

@endsection