@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Edit
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">TradeMarks</li>
          <li class="active">Edit</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">TradeMarks</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{route('trademarks.update',$trademark->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                      <div class="form-group">
                        <label for="trademark_name">Tên thương hiệu</label>
                        <input type="text" name="trademark_name" class="form-control" id="trademark_name" placeholder="Tên thương hiệu" value="{{ $trademark->trademark_name}}">
                      </div>
                      <div class="form-group">
                        <textarea class="textarea" placeholder="Description"
                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $trademark->description}}</textarea>
                      </div>
                      <div class="form-group">
                        @foreach($categories as $category)
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="category_id[]" value="{{$category->id}}" {{ in_array( $category->id, $oldcategoriesId ) ? "checked = '1' " : ""}}">
                               {{$category->category_name}}
                            </label>
                          </div>
                        @endforeach
                      </div>
                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              

              
            </div>
      </section>
    </div>
@endsection