@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Category</li>
          <li class="active">Create</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Categories</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="box-body">
                      <div class="form-group {{ $errors->has('category_name') ? 'has-error' : "" }}">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Category">
                        @if($errors->has('category_name'))
                          <span class="help-block">
                            <strong>{{$errors->first('category_name')}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              

              
            </div>
      </section>
    </div>
@endsection