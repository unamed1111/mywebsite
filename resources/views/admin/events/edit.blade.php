@extends('admin.layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('for_admin_page/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection
@section('content')
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Sự kiện
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
          <li class="active">Sự kiện</li>
          <li class="active">Chỉnh sửa</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Sự kiện</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{ route('events.update',$event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                      {{-- form-in-here --}}
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
                            <label for="title">Dịch vụ : </label>
                            <input class="form-control" type="text" name="title" value="{{old('title',$event->title)}}">
                             @if($errors->has('title'))
                              <span class="help-block">
                                <strong>{{$errors->first('title')}}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group col-md-4 input-group date {{ $errors->has('start_date') ? 'has-error' : "" }}">
                            <label for="start_date">Ngày bắt đầu : </label>
                            <input class="form-control datepicker" type="text" name="start_date" value="{{old('start_date',$event->start_date)}}">
                             @if($errors->has('start_date'))
                              <span class="help-block">
                                <strong>{{$errors->first('start_date')}}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group col-md-4 input-group date {{ $errors->has('end_date') ? 'has-error' : "" }}">
                            <label for="end_date">Ngày kết thúc</label>
                            <input  class="form-control datepicker" type="text" name="end_date" value="{{old('end_date',$event->end_date)}}">
                             @if($errors->has('end_date'))
                              <span class="help-block">
                                <strong>{{$errors->first('end_date')}}</strong>
                              </span>
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('discount') ? 'has-error' : "" }}">
                            <label for="discount">Giảm giá </label>
                            <input class="form-control" type="number" name="discount" value="{{old('discount',$event->discount)}}">
                             @if($errors->has('discount'))
                              <span class="help-block">
                                <strong>{{$errors->first('discount')}}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="box-body pad form-group">
                          <label for="content">Content</label>
                          <textarea id="editer" name="content" rows="10" cols="80">{{old('content',$event->content) }}
                          </textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              

              
            </div>
      </section>
    </div>
@endsection

@section('javascript')
<script src="{{asset('for_admin_page/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('for_admin_page/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script>
  $(function () {
    CKEDITOR.replace('editer');
    $('.datepicker').datepicker({
      autoclose: true,
      format : 'yyyy-mm-dd'
    })
  })
</script>
@endsection