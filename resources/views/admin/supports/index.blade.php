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
        Hỗ trợ khách hàng 
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Hỗ trợ khách hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Hỗ trợ khách hàng</h3>
              <a class="btn btn-success pull-right" href="{{route('supports.create')}}">Thêm</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($supports as $support)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $support->title}}</td>
                  <td style="width: 25%">
                    <a class="btn btn-primary" href="{{route('supports.show',$support->id)}}"><i class="fa fa-eye"></i> Xem</a>
                    <a class="btn btn-warning" href="{{route('supports.edit',$support->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                  </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('supports.destroy',$support->id)])
                @endforeach
              </table>
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