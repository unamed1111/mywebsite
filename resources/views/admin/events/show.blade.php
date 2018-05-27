@extends('admin.layouts.master')
@section('css')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> --}}
@endsection
@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Sự kiện 
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
              <li class="active">Sự kiện</li>
            </ol>
        </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$event->title}}</h3>
                </div>
              <!-- /.box-header -->
                <div class="box-body">
                    <div class="panel-body table-responsive">
                        <div class="row">
                            {!! $event->content !!}
                        </div>
                    </div>
                </div>
              <!-- /.box-body -->
            </div>
      </section>
    </div>
@endsection

