@extends('frontend.layout.master')
@section('underbanner')
            <form method="POST" action="#">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">ĐĂNG KÝ</div>
                        <div class="panel-body">                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>EMAIL:</strong></div>
                                <div class="col-md-12">
                                    <input id="email" class="form-control" name="email" required>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <div class="col-md-12"><strong>MẬT KHẨU:</strong></div>
                                <div class="col-md-12">
                                    <input id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>HỌ TÊN:</strong></div>
                                <div class="col-md-12">
                                    <input id="customer_name" class="form-control" name="customer_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>NGÀY SINH:</strong></div>
                                <div class="col-md-12">
                                    <input id="dob" class="form-control" name="dob" type="date" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>GIỚI TÍNH:</strong></div>
                                <div class="col-md-12">
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>SỐ ĐIỆN THOẠI:</strong></div>
                                <div class="col-md-12">
                                    <input id="phone" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>ĐỊA CHỈ:</strong></div>
                                <div class="col-md-12">
                                    <input id="address" class="form-control" name="address" type="text" required>
                                </div>
                            </div>                                                       
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix" style="float: right;">ĐĂNG KÝ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
<div class="clear"></div>
@endsection