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
        Thương hiệu
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ </a></li>
        <li class="active">Thương hiệu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Thương hiệu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-active">
                            <tr>
                                <th> Thương hiệu</th>
                                <td field-key=''>{{ $trademark->trademark_name ? $trademark->trademark_name : "" }}</td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td field-key=''>{{ $trademark->description ? $trademark->description : "" }}</td>
                            </tr>
                        </table>
                    </div>
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
    <script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
@endsection