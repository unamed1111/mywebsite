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
                    </div>

                    <div class="col-md-6">
                        <table class="table table-bordered table-active">
                            <tr>
                                <th>Code Giảm giá:</th>
                                <td field-key=''>{{ $order->billing_discount_code ? $order->billing_discount_code : "Không có"  }}</td>
                            </tr>
                            <tr>
                                <th>Tổng tiền chưa chiết khấu:</th>
                                <td field-key=''>{{ $order->billing_subtotal }}</td>
                            </tr>
                            <tr>
                                <th>Chiết khấu:</th>
                                <td field-key=''>{{ $order->billing_tax }}</td>
                            </tr>
                            <tr>
                                <th>Tổng tiền đã thanh toán:</th>
                                <td field-key=''>{{ $order->billing_total }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            {{-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div> --}}
          </div>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Chi tiết đơn hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Sản Phẩm</th>
                          <th>Số lượng</th>
                          <th>Chiết khấu</th>
                          {{-- <th>Hành động</th> --}}
                        </tr>
                        </thead>
                        <?php $stt = 1; ?>
                        @foreach($order_products as $order_product)
                        <tr>
                          <td>{{ $stt++ }}</td>
                          <td>{{ $order_product->product ? $order_product->product->product_name : "" }}</td>
                          <td>{{ $order_product->qty}}</td>
                          <td>{{ $order_product->discount }}</td>
                          {{-- <td style="width: 25%">
                            <a class="btn btn-primary" href="{{route('orders.show',$order->id)}}"><i class="fa fa-edit"></i> Xem</a>
                            <a class="btn btn-warning" href="{{route('orders.edit',$order->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                          </td> --}}
                        </tr>
                        @include('admin.elements.modal-delete',['route'=> route('orders.destroy',$order->id)])
                        @endforeach
                      </table>
                </div>
            </div>
            <!-- /.box-body -->
            {{-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div> --}}
          </div>
    </section>
    </div>
@endsection

@section('javascript')
      <!-- DataTables -->
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
      })
    </script>
@endsection