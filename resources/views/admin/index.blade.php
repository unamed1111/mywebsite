@extends('admin.layouts.master')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Quản lý
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Khách hàng</span>
                <span class="info-box-number">{{$qty_customer}}<small></small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Phản hồi</span>
                <span class="info-box-number">{{$qty_feedback }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Số đơn hàng</span>
                <small>của tháng </small>
                <span class="info-box-number">{{$qty_order}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tổng sản phẩm</span>
                <span class="info-box-number">{{$qty_product}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Default box -->
        <div class="row">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Quản lý doanh thu cửa hàng</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                    <div class="col-md-8">
                      {!! $chart->container ()!!}
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Kế hoạch</strong>
                      </p>

                      <div class="progress-group">
                        <span class="progress-text">Thêm mặt hàng mới</span>
                        <span class="progress-number"><b>50</b>/200</span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Xử lý hàng tồn kho</span>
                        <span class="progress-number"><b>250</b>/400</span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Nâng cấp hệ thống</span>
                        <span class="progress-number"><b>500</b>/800</span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Mở rộng chi nhanh</span>
                        <span class="progress-number"><b>100</b>/500</span>

                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                    </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            </div>
            <!-- /.box-footer-->
          </div>
        </div>
        <!-- /.box -->
        <div class="row">
          <div class="col-md-8">
               <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Đơn hàng gần nhất</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                    <tr>
                      <th><strong>Mã đơn hàng</strong></th>
                      <th>Tên khách hàng</th>
                      <th>Tổng tiền <small>(vnđ)</small></th>
                      <th>Phương thức thanh toán</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($last_orders as $last_order)
                    <tr>
                      <td><a href="{{route('orders.show',$last_order->id)}}">{{"OR".$last_order->id}}</a></td>
                      <td>{{$last_order->customer_name}}</td>
                      <td>{{ number_format($last_order->billing_total) }}
                      </td>
                      <td><span class="label label-success">{{ PAYMENT_METHOD[$last_order->payment_method] }}</span></td>
                    </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <a href="{{route('orders.index')}}" class="btn btn-sm btn-default btn-flat pull-right">Xem tất cả </a>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
                 <!-- Product LIST -->
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Khách hàng mới</h3>

                    <div class="box-tools pull-right">
                      <span class="label label-danger">{{$last_customers->count() . " Khách hàng mới" }} </span>
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                      @foreach($last_customers as $last_customer)
                      <li>
                        <img src="{{ asset('/for_admin_page/dist/img/user1-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="{{route('customers.show',$last_customer->id)}}">{{ $last_customer->customer_name}}</a>
                        <span class="users-list-date">{{ $last_customer->created_at }}</span>
                      </li>
                      @endforeach
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer text-center">
                    <a href="{{route('customers.index')}}" class="uppercase">Xem tất cả</a>
                  </div>
                  <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>
            <div class="row">
              {{-- product new --}}
              <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Sản phẩm mới thêm </h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  @foreach($last_products as $last_product)
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset(json_decode($last_product->detail->image)[0]) }}" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{ $last_product->product_name }}
                        <span class="label label-warning pull-right">{{ number_format($last_product->price,2)." vnđ" }}</span></a>
                      <span class="product-description">
                        {{$last_product->descripton}}
                          </span>
                    </div>
                  </li>
                  @endforeach
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="{{route('products.index')}}" class="uppercase">Xem tất cả</a>
              </div>
              <!-- /.box-footer -->
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('javascript')
<script src=//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
{{-- <script src=//cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js charset=utf-8></script> --}}
{!! $chart->script() !!}
@endsection