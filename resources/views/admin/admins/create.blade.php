@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tạo mới
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
          <li class="active">Admin</li>
          <li class="active">Tạo mới</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Admin</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{ route('admins.store') }}" method="POST">
                    @csrf
                    <div class="box-body">
                      {{-- form-in-here --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
                            <label for="name">Admin Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Admin Name" value="{{ old('name') }}">
                            @if($errors->has('name'))
                              <span class="help-block">
                                <strong>{{$errors->first('name')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }} ">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                              <span class="help-block">
                                <strong>{{$errors->first('email')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('password') ? 'has-error' : "" }} ">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{ old('password') }}">
                            @if($errors->has('password'))
                              <span class="help-block">
                                <strong>{{$errors->first('password')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('password_confirm') ? 'has-error' : "" }} ">
                            <label for="password_confirm">Nhập lại lại mật khẩu</label>
                            <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Password Confirm" value="{{ old('password_confirm') }}">
                            @if($errors->has('password_confirm'))
                              <span class="help-block">
                                <strong>{{$errors->first('password_confirm')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="level">Chức vụ</label>
                            <select name="level" id="level" class="form-control select2">
                              @foreach(LEVEL as $key => $entry  )
                              <option value="{{$key}}">{{$entry}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
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
