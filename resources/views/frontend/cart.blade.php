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
							<th style="width:10%">SỐ LƯỢNG</th>
							<th style="width: 5%"></th>
							<th style="width:20%" class="text-center">THÀNH TIỀN</th>
							<th style="width:5%"></th>
						</tr>
					</thead>
					@foreach(Cart::content() as $item)
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs">
										<a href="{{route('details',$item->id)}}"><img src="{{json_decode($item->options->img)[0]}}" >
										</a>
									</div>
									<div class="col-sm-10">
										<a href="{{route('details',$item->id)}}"><h4 style="color:black;"><strong>{{$item->name}}</strong></h4></a>
                                        {{$item->img}}
									</div>
								</div>
							</td>
							<td data-th="Price">{{$item->price}}</td> 
                            <form action="{{route('cart.update')}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('POST') }}                       
							<td data-th="Quantity">								
								<input id="qty" name="qty" type="number" class="form-control text-center" value="{{$item->qty}}">
                                <input id="rowId" name="rowId" type="hidden" class="form-control text-center" value="{{$item->rowId}}">
                            </td>
							<td>
                                <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh"></i></button></td>
                            </form>
							<td data-th="Subtotal" class="text-center">{{$item->price*$item->qty}}</td>
							<td class="actions" data-th="">
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
							<td></td>
							<td class="hidden-xs text-center">
										Tổng: {{Cart::subtotal()}}<br>
										VAT (10%): {{Cart::tax()}}<br>
								<h4 class="price"><span>Tổng cộng: {{Cart::total()}}</span></h4>
							</td>							
						</tr>
					</tfoot>
				</table>
				





<form class="form-horizontal" method="post" action="{{route('checkout')}}">
				@csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> HÌNH THỨC THANH TOÁN </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card Type:</strong></div>
                                <div class="col-md-12">
                                    <select id="payment" name="payment" class="form-control">
                                        @foreach(PAYMENT_METHOD as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                            </div>
                            <!-- <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Date</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div>
 -->                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Pay secure using your credit card.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">Amex</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">THÔNG TIN KHÁCH HÀNG</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>THÔNG TIN KHÁCH HÀNG</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>HỌ TÊN:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="customer_name" name="customer_name" value="" />
                                </div>
                            </div>                          
                            <div class="form-group">
                                <div class="col-md-12"><strong>SỐ ĐIỆN THOẠI:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_phone" class="form-control" value="" />
                                </div>
                            </div>                           
                            <div class="form-group">
                                <div class="col-md-12"><strong>EMAIL:</strong></div>
                                <div class="col-md-12"><input type="text" id="customer_email" name="customer_email" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>ĐỊA CHỈ:</strong></div>
                                <div class="col-md-12"><input type="text" id="customer_address" name="customer_address" class="form-control" value="" /></div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                    
                    <!--CREDIT CART PAYMENT END-->
                </div>
                
                </form>




</div>
                <div class="clear"></div>


@endsection