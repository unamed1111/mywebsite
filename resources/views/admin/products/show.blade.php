@extends('admin.layouts.master')
@section('css')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> --}}
@endsection
@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Chi tiết
              <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
              <li class="active">Sản phẩm</li>
              <li class="active">Chi tiết</li>
            </ol>
        </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Sản phấm</h3>
                </div>
              <!-- /.box-header -->
                <div class="box-body">
                    <div class="panel-body table-responsive">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        @foreach(json_decode($product->detail->image) as $key => $image)
                                      <div class="item {{ $key == 0 ? "active" : "" }}">
                                        <img src="{{$image}}"  width="100%">
                                      </div>
                                        @endforeach
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            </div>
                            <div class="col-md-7">
                                <h2 class="text-center"> {{$product->product_name}}</h2>
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Mã:</th>
                                        <td field-key=''>{{ "SP.".$product->id}}</td>
                                    </tr>
                                     <tr>
                                        <th style="width: 30%;">Tên sản phẩm:</th>
                                        <td field-key=''>{{ $product->product_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Giá:</th>
                                        <td field-key=''>{{ $product->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mô tả</th>
                                        <td field-key=''>{{ $product->description }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- /.box-body -->
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Chi tiết</h3>
                </div>
                <div class="box-body">
                    <div class="panel-body table-responsive">
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>Năng lượng máy:</th>
                                            <td field-key=''>{{ WATCH_ENERGY[$product->detail->energy]}}</td>
                                        </tr>
                                         <tr>
                                            <th style="width: 30%;">Đường kính vỏ:</th>
                                            <td field-key=''>{{ $product->detail->diameter. ' mm'}}</td>
                                        </tr>
                                        <tr>
                                            <th>Độ chống nước:</th>
                                            <td field-key=''>{{ $product->detail->waterproof . " ATM"}}</td>
                                        </tr>
                                        <tr>
                                            <th>Chất liệu vỏ</th>
                                            <td field-key=''>{{ WATCH_CASE[$product->detail->case] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Chất liệu dây</th>
                                            <td field-key=''>{{ WATCH_CHAIN[$product->detail->watch_chain] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mặt kính</th>
                                            <td field-key=''>{{ $product->detail->glass }}</td>
                                        </tr>
                                        <tr>
                                            <th>Năm bảo hành</th>
                                            <td field-key=''>{{ $product->detail->guarantee . " Năm" }}</td>
                                        </tr>
                                        <tr>
                                            <th>Số lượng</th>
                                            <td field-key=''>{{ $product->detail->total_qty." Chiếc" }}</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="col-md-8">
                                {!! $product->detail->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </section>
    </div>
@endsection

