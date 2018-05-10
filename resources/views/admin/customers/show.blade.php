@extends('admin.layouts.master')

@section('css')
      <!-- DataTables -->
@endsection
@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-3">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/home/gallery1.jpg')}}" alt="Card image cap">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered table-active">
                            <tr>
                                <th>Tên khách hàng:</th>
                                <td field-key=''>{{ $customer->customer_name ? $customer->customer_name : "" }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td field-key=''>{{ $customer->email ? $customer->email : "" }}</td>
                            </tr>
                            <tr>
                                <th>Ngày sinh:</th>
                                <td field-key=''>{{ $customer->dob ? $customer->dob : "" }}</td>
                            </tr>
                            <tr>
                                <th>Giới tính:</th>
                                <td field-key=''>{{ $customer->gender == 1 ? "Nam" : "Nữ" }}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại:</th>
                                <td field-key=''>{{ $customer->phone ? $customer->phone : "" }}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ:</th>
                                <td field-key=''>{{ $customer->address ? $customer->address : "" }}</td>
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
    </section>
    </div>
@endsection

@section('javascript')
      <!-- DataTables -->
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@endsection