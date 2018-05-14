@extends('admin.layouts.master')

@section('css')
      <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Đơn hàng
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Chi tiết Đơn hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Đơn hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-active">
                            <tr>
                                <th>Tên khách hàng:</th>
                                <td field-key=''>{{ $order->customer_name ? $order->customer_name : "" }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td field-key=''>{{ $order->customer_email ? $order->customer_email : "" }}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại:</th>
                                <td field-key=''>{{ $order->customer_phone ? $order->customer_phone : "" }}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ:</th>
                                <td field-key=''>{{ $order->customer_address ? $order->customer_address : "" }}</td>
                            </tr>
                            <tr>
                                <th>Thời gian:</th>
                                <td field-key=''>{{ $order->created_at ? $order->created_at : "" }}</td>
                            </tr>
                            <tr>
                                <th>Phương thức thanh toán:</th>
                                <td field-key=''>{{ PAYMENT_METHOD[$order->payment_method] }}</td>
                            </tr>
                        </table>
                        <img src="{{ asset( '/for_admin_page/dist/img/credit/visa.png ')}}" alt="Visa">
                        <img src="{{ asset( '/for_admin_page/dist/img/credit/mastercard.png ')}}" alt="Mastercard">
                        <img src="{{ asset( '/for_admin_page/dist/img/credit/american-express.png')}}" alt="American Express">
                        <img src="{{ asset( '/for_admin_page/dist/img/credit/paypal2.png')}}" alt="Paypal">
                    </div>

                    <div class="col-md-6">
                    <p class="lead">Đơn hàng ngày:  {{ \Carbon\Carbon::parse($order->created_at)->toDateString() }}</p>

                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">Tổng tiền chưa chiết khấu:</th>
                          <td>{{ $order->billing_subtotal }} vnđ</td>
                        </tr>
                        <tr>
                          <th>Thuế (10%):</th>
                          <td>{{ $order->billing_tax }} </td>
                        </tr>
                        {{-- <tr>
                          <th>Shipping:</th>
                          <td>$5.80</td>
                        </tr> --}}
                        <tr>
                          <th>Code giảm giá :</th>
                          <td>{{ $order->billing_discount_code ? $order->billing_discount_code : "Không có"  }}</td>
                        </tr>
                        <tr>
                          <th>Tổng tiền đã thanh toán:</th>
                          <td>{{ $order->billing_total }} vnđ</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Chi tiết đơn hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <table id="example" class="table table-striped">
                        <thead>
                        <tr>
                          <th>Số lượng</th>
                          <th>Hình ảnh</th>
                          <th>Sản Phẩm</th>
                          <th>Giảm giá (%)</th>
                          <th>Đơn giá</th>
                        </tr>
                        </thead>
                        @foreach($order_products as $order_product)
                        <tr>
                          <td>{{ $order_product->qty}}</td>
                          <td><img src="{{$order_product->product && $order_product->product->detail ? json_decode($order_product->product->detail->image)[0] : "" }}" alt="" width="40px" height="40px"></td>
                          <td><a href="{{route('products.show',$order_product->product_id)}}">{{ $order_product->product ? $order_product->product->product_name : "" }}</a></td>
                          <td>{{ $order_product->discount }}</td>
                          <td>{{ ( $order_product->qty * $order_product->product->price) * ( 1- ($order_product->discount / 100) )  }}</td>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
           
          </div>
    </section>
    </div>
@endsection

@section('javascript')
      <!-- DataTables -->
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@endsection