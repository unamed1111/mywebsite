@extends('frontend.layout.master')
@section('underbanner')
            <form method="POST" action="{{ route('cus.register') }}">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">ĐĂNG KÝ</div>
                        <div class="panel-body">                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>EMAIL:</strong></div>
                                <div class="col-md-12">
                                    <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <div class="col-md-12"><strong>MẬT KHẨU:</strong></div>
                                <div class="col-md-12">
                                    <input id="password" class="form-control" name="password" required>
                                </div>
                            </div>                                                       
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">ĐĂNG KÝ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
<div class="clear"></div>
@endsection