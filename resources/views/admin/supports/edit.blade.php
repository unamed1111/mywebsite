@extends('admin.layouts.master')

@section('content')
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Hỗ trợ
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
          <li class="active">Hỗ trợ</li>
          <li class="active">Chỉnh sửa</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Hỗ trợ khách hàng</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{ route('supports.update',$support->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                      {{-- form-in-here --}}
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
                            <label for="title">Dịch vụ : </label>
                            <input class="form-control" type="text" name="title" value="{{old('title',$support->title)}}">
                             @if($errors->has('title'))
                              <span class="help-block">
                                <strong>{{$errors->first('title')}}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="box-body pad form-group">
                          <label for="content">Content</label>
                          <textarea id="editer" name="content" rows="10" cols="80">{{old('content',$support->content) }}
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
<script>
  $(function () {
    CKEDITOR.replace('editer')
  })
</script>
@endsection