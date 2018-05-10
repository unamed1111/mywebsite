@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý danh mục
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Danh Mục</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Danh mục</h3>
              <a class="btn btn-success pull-right" href="{{route('categories.create')}}">Thêm</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Danh mục</th>
                  <th>Hành động</th>
                </tr>
                <?php $stt = 1; ?>
                @foreach($categories as $category)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $category->category_name }}</td>
                  <td style="width: 25%">
                    <a class="btn btn-warning" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-edit"></i> Sửa</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('categories.destroy',$category->id)])
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