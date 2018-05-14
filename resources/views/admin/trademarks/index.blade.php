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
        Quản lý thương hiệu
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"> Thương hiệu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Thương hiệu</h3>
              <a class="btn btn-success pull-right" href="{{route('trademarks.create')}}">Thêm</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên Thương hiệu</th>
                  <th>Hành hộng</th>
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($trademarks as $trademark)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $trademark->trademark_name}}</td>
                  <td style="width: 25%">
                    <a class="btn btn-primary" href="{{route('trademarks.show',$trademark->id)}}" ><i class="fa fa-eye"></i> Xem</a>
                    <a class="btn btn-warning" href="{{route('trademarks.edit',$trademark->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                  </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('trademarks.destroy',$trademark->id)])
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