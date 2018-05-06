@extends('admin.layouts.master')

@section('css')
      <!-- datepicker -->
    <link rel="stylesheet" href="{{ asset( '/for_admin_page/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection
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
          <li class="active">Customer</li>
          <li class="active">Edit</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Customer</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{ route('customers.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                      {{-- form-in-here --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('customer_name') ? 'has-error' : "" }}">
                            <label for="customer_name">Customer Name</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Customer Name" value="{{ $customer->customer_name }}">
                            @if($errors->has('customer_name'))
                              <span class="help-block">
                                <strong>{{$errors->first('customer_name')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }} ">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email" value="{{ $customer->email }}">
                            @if($errors->has('email'))
                              <span class="help-block">
                                <strong>{{$errors->first('email')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div> 
                     {{--  <div class="row">
                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('password') ? 'has-error' : "" }} ">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="password" value="{{ old('password') }}">
                            @if($errors->has('password'))
                              <span class="help-block">
                                <strong>{{$errors->first('password')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('password_confirm') ? 'has-error' : "" }} ">
                            <label for="password_confirm">Password Comfirm</label>
                            <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Password Confirm" value="{{ old('password_confirm') }}">
                            @if($errors->has('password_confirm'))
                              <span class="help-block">
                                <strong>{{$errors->first('password_confirm')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>   --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('address') ? 'has-error' : "" }}">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ $customer->address }}"> 
                            @if($errors->has('address'))
                              <span class="help-block">
                                <strong>{{$errors->first('address')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('phone') ? 'has-error' : "" }}">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ $customer->phone }}">
                            @if($errors->has('phone'))
                              <span class="help-block">
                                <strong>{{$errors->first('phone')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('gender') ? 'has-error' : "" }}">
                            <label for="gender">Gender</label>
                            <select class="form-control select2" name="gender" style="width: 100%;">
                              <option value="">Chọn giới tính</option>
                              <option value="1" {{$customer->gender == 1 ? "selected" : "" }}>Nam</option>
                              <option value="2" {{$customer->gender == 2 ? "selected" : "" }}>Nữ</option>
                            </select>
                            @if($errors->has('gender'))
                              <span class="help-block">
                                <strong>{{$errors->first('gender')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('dob') ? 'has-error' : "" }}">
                            <label for="dob">Sinh Nhật</label>
                            <div class="input-group date" id="datepicker">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="dob" value="{{ $customer->dob }}">
                            </div>
                            
                            @if($errors->has('dob'))
                              <span class="help-block">
                                <strong>{{$errors->first('dob')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                         <div class="col-md-4 {{ $errors->has('avatar') ? 'has-error' : "" }}">
                            <label for="avatar" class="control-label">{{ __('Ảnh 1') }}</label>
                            <div class="img-preview">
                                <input type="file" class="image image-upload" name="avatar" value=" {{ json_decode($customer->avatar )}}">
                                <a class="example-image-link" href="" data-lightbox="example-6" data-title="">
                                <img src="" class="img-preview img-fluid", alt="" width="100px" height="100px">
                                </a>
                            </div>
                             @if($errors->has('avatar'))
                                <span class="help-block">
                                  <strong>{{$errors->first('avatar')}}</strong>
                                </span>
                              @endif
                          </div>
                      </div> 
                       
                      
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              

              
            </div>
      </section>
    </div>
@endsection

@section('javascript')
<script src="{{ asset( '/for_admin_page/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}} "></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).parent().find('.img-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function () {
        $("input:file").change(function () {
            readURL(this);
        });
    });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
  
</script>
@endsection