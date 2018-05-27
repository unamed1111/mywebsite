@extends('frontend.layout.master')
@section('banner')
<div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            SẢN PHẨM ĐÃ CHỌN <div class="pull-right"><small><a class="afix-1" href="#">SỬA GIỎ HÀNG</a></small></div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="/images/home/gallery2.jpg" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">TÊN SẢN PHẨM</div>
                                    <div class="col-xs-12"><small>SỐ LƯỢNG:<span>1</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>$</span>25.00</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="/images/home/gallery2.jpg" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">TÊN SẢN PHẨM</div>
                                    <div class="col-xs-12"><small>SỐ LƯỢNG:<span>1</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>$</span>25.00</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="/images/home/gallery2.jpg" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">TÊN SẢN PHẨM</div>
                                    <div class="col-xs-12"><small>SỐ LƯỢNG:<span>2</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>$</span>50.00</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>PHÍ VẬN CHUYÊN</strong>
                                    <div class="pull-right"><span>$</span><span>2.00</span></div>
                                </div>
                                <div class="col-xs-12">
                                    <small></small>
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>TỔNG CỘNG</strong>
                                    <div class="pull-right"><span>$</span><span>150.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">THÔNG TIN GIAO HÀNG CHO QUÝ KHÁCH HÀNG</div>
                        <div class="panel-body">
                        	<form method="POST" action="#">
                    		@csrf                      
                            <div class="form-group">
                                <div class="col-md-12"><strong>Họ và tên:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_name" class="form-control"  value="" />
                                </div>
                            </div>      
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_phone" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="customer_email" class="form-control" value="" />
                                </div>
                            </div>                        
                            </form>
                        </div>
                    </div>
                </div>
                
                </form>
            </div>
@endsection