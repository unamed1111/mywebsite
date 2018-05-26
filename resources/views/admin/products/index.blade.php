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
        Quản lý Sản phẩm 
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Sản phẩm</li>
      </ol>
    </section>

    <hr>
    <!-- Main content -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 form-group">
            <label for="search_category" class="col-2" style="float: left;">Danh mục</label>
            <select id="search_category" class="form-control">
                    <option value="0">Chọn Danh mục</option>
                    @foreach($categories as $category)
                    <option value = "{{$category->id}}" {{ request()->query('search_category') == $category->id ? "selected" : "" }}>{{$category->category_name}}</option>
                    @endforeach
            </select>
          </div>
          <div class="col-md-3 form-group">
            <label for="search_trademark" class="col-2" style="float: left;">Thương hiệu</label>
            <select id="search_trademark" class="form-control">
                    <option value="0">Chọn Thương hiệu</option>
                    @foreach($trademarks as $trademark)
                    <option value = "{{$trademark->id}}" {{ request()->query('search_trademark') == $trademark->id ? "selected" : "" }}>{{$trademark->trademark_name}}</option>
                    @endforeach
            </select>
          </div>
          <div class="col-md-3 form-group">
            <label for="search_price" class="col-2" style="float: left;">Price</label>
            <select id="search_price" class="form-control">
                    @foreach(ARRAY_PRICE as $key => $value)
                    <option value="{{$key}}" {{ request()->query('search_price') == $key ? "selected" : "" }}>{{$value}}</option>
                    @endforeach
            </select>
          </div>
      </div>
    </div>
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Sản phẩm</h3>
               
              <a class="btn btn-success pull-right" href="{{route('products.create')}}">Thêm</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($products as $product)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $product->product_name}}</td>
                  <td>{{ $product->price}}</td>
                  <td>{{ $product->detail ? $product->detail->total_qty : ""}}</td>
                  <td style="width: 25%">
                    <a class="btn btn-primary" href="{{route('products.show',$product->id)}}"><i class="fa fa-eye"></i> Xem</a>
                    <a class="btn btn-warning" href="{{route('products.edit',$product->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Xoá</a>
                  </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('products.destroy',$product->id)])
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
<script>
        $(function(){
            $("#search_category,#search_trademark,#search_price").on('change', function(){
                  var url = "{!! http_build_query(Request::except('search_category','search_trademark')) !!}";
                if (url.length > 0) {
                    location.href = window.location.pathname + "?" + url + "&search_category=" +$('#search_category').val() +"&search_trademark=" +$('#search_trademark').val() +"&search_price=" +$('#search_price').val();
                } else {
                    location.href = window.location.pathname + "?search_category=" +$('#search_category').val() +"&search_trademark=" +$('#search_trademark').val() +"&search_price=" +$('#search_price').val();
                }
            });
        });
    </script>
@endsection