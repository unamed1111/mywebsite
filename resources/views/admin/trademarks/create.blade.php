@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tạo mới
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
          <li class="active">Thuong hiệu</li>
          <li class="active">Tạo mới</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Thương hiệu</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{route('trademarks.store')}}" method="POST">
                    @csrf
                    <div class="box-body">
                      <div class="form-group {{ $errors->has('trademark_name') ? 'has-error' : "" }}">
                        <label for="trademark_name">Tên thương hiệu</label>
                        <input type="text" name="trademark_name" class="form-control" id="trademark_name" placeholder="Tên thương hiệu">
                        @if($errors->has('trademark_name'))
                          <span class="help-block">
                            <strong>{{$errors->first('trademark_name')}}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <textarea class="textarea" placeholder="Description"
                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"></textarea>
                      </div>
                      <div class="form-group {{ $errors->has('category_id') ? 'has-error' : "" }}">
                        @foreach($categories as $category)
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="category_id[]" value="{{$category->id}}">
                              {{$category->category_name}}
                            </label>
                          </div>
                        @endforeach
                        @if($errors->has('category_id'))
                            <span class="help-block">
                              <strong>{{$errors->first('category_id')}}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Tạo mới</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              

              
            </div>
      </section>
    </div>
@endsection