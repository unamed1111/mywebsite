@extends('frontend.layout.master')
@section('underbanner')
            <form method="POST" action="{{ route('cus.login') }}">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">ĐĂNG NHẬP</div>
                        <div class="panel-body">                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>EMAIL:</strong></div>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>                          
                            <div class="form-group">
                                <div class="col-md-12"><strong>MẬT KHẨU:</strong></div>
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>                                                       
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">ĐĂNG NHẬP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
<div class="clear"></div>
@endsection