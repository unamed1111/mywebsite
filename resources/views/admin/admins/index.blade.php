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
        Admin
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Admin</h3>
              @can('admin',auth()->user())
              <a class="btn btn-success pull-right" href="{{route('admins.create')}}">Thêm</a>
              @endcan
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <th>Chức Vụ</th>
                  @can('admin',auth()->user())
                    <th>Hành động</th>
                  @endcan
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($admins as $admin)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $admin->name}}</td>
                  <td>{{ $admin->email}}</td>
                  <td>{{ LEVEL[$admin->level]}}</td>
                  <td style="width: 25%">
                    @can('admin',auth()->user())
                      <a class="btn btn-warning" href="{{route('admins.edit',$admin->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                      <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                    @endcan
                  </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('admins.destroy',$admin->id)])
                @endforeach
              </table>
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