@extends('frontend.layouts.master')

@section('css')
        <link rel="stylesheet" type="text/css" href="css/css_frontend/productlist.css">
        <link href="css/css_frontend/index.css" type="text/css" rel="stylesheet">
        <!-- Half-slider CSS -->
        <link href="css/css_frontend/half-slider.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/css_frontend/jquery.raty.css">
@endsection    
        
@section('content')        
    <section id="productpage" style="">
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="border-right: 1px solid #ddd;">
                    @include('frontend.layouts.sidebar')
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 product-search">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li class="active">Data</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-header">
                                <div class="form-group">
                                    <label >Keyword</label>
                                    <input type="text" class="search" placeholder="" >
                                    <button type="button" class="btn btn-info btn-sm">Search</button>
                                </div>
                                <div class="form-group form-inline">
                                    <label class="price">Price</label>
                                    <input class="to" type="text" placeholder="" >
                                    <label >-</label>
                                    <input class="to" type="text" placeholder="" >
                                    <label class="quantity">Quantity</label>
                                    <input class="to" type="text" placeholder="" >
                                    <label >-</label>
                                    <input class="to" type="text" placeholder="" >
                                    <label class="quantity">Sort By</label>
                                    <li><a href="#">best rating <i class="fa fa-caret-down"></i><span class="icon-text"></span></a></li>
                                    <li><a href="#">best seller <i class="fa fa-caret-down"></i><span class="icon-text"></span></a></li>
                                    <li><a href="#">price <i class="fa fa-caret-down"></i><span class="icon-text"></span></a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-list">
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 productlist-image">
                                            <img  src="images/home/product9.jpg" alt="" />
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 product-desc">
                                                        <div class="product-name">
                                                            <h3>
                                                            <a href="#"><span class="text-center">
                                                            Special PU Leather Flip Case For Original Xiaomi Mi4i Mi 4i Qualcomm Snapdragon 615 Octa Core Phone Free Shipping High Quality(China (Mainland))
                                                            5 Colors Available</span></a>
                                                            </h3>
                                                        </div>
                                                        <div class="shop-name">
                                                            <a href="#"><span>Shop Name</span></a>
                                                        </div>
                                                        <div class="rating-box">
                                                            <div class="rating medal readonly-rating" data-score="3" alt="shop-rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 infoprice">
                                                        <span class="value">US $9.99</span>
                                                        <span class="separator">/</span>
                                                        <span class="unit">piece</span>
                                                        <div class="rating-box">
                                                            <div class="rating readonly-rating" data-score="3"></div>
                                                            <span>3 Review(s)</span>
                                                        </div>
                                                        <div class="rate-history">
                                                            <span class="order-num">
                                                            <a href="" class="order-num-a">Orders  (3)</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" >
                                                        <div class="add-to">
                                                            <a href="#"><i class="fa fa-heart-o"></i> <span class="icon-text">Add to wishlist</span></a>
                                                            <a href="#"><i class="fa fa-shopping-cart"></i> <span class="icon-text">Add to cart</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                        <div class="report text-right">
                                                            <a href="#"><i class="glyphicon glyphicon-flag"></i> <span class="icon-text">Report as fraud</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-list">
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 productlist-image">
                                            <img  src="images/home/product9.jpg" alt="" />
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 product-desc">
                                                        <div class="product-name">
                                                            <h3>
                                                            <a href="#"><span class="text-center">
                                                            Special PU Leather Flip Case For Original Xiaomi Mi4i Mi 4i Qualcomm Snapdragon 615 Octa Core Phone Free Shipping High Quality(China (Mainland))
                                                            5 Colors Available</span></a>
                                                            </h3>
                                                        </div>
                                                        <div class="shop-name">
                                                            <a href="#"><span>Shop Name</span></a>
                                                        </div>
                                                        <div class="rating-box">
                                                            <div class="rating medal readonly-rating" data-score="3" alt="shop-rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 infoprice">
                                                        <span class="value">US $9.99</span>
                                                        <span class="separator">/</span>
                                                        <span class="unit">piece</span>
                                                        <div class="rating-box">
                                                            <div class="rating readonly-rating" data-score="3"></div>
                                                            <span>3 Review(s)</span>
                                                        </div>
                                                        <div class="rate-history">
                                                            <span class="order-num">
                                                            <a href="" class="order-num-a">Orders  (3)</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" >
                                                        <div class="add-to">
                                                            <a href="#"><i class="fa fa-heart-o"></i> <span class="icon-text">Add to wishlist</span></a>
                                                            <a href="#"><i class="fa fa-shopping-cart"></i> <span class="icon-text">Add to cart</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                        <div class="report text-right">
                                                            <a href="#"><i class="glyphicon glyphicon-flag"></i> <span class="icon-text">Report as fraud</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-list">
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 productlist-image">
                                            <img  src="images/home/product9.jpg" alt="" />
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <div class="col-sm-8 col-xs-8 product-desc">
                                                        <div class="product-name">
                                                            <h3>
                                                            <a href="#"><span class="text-center">
                                                            Special PU Leather Flip Case For Original Xiaomi Mi4i Mi 4i Qualcomm Snapdragon 615 Octa Core Phone Free Shipping High Quality(China (Mainland))
                                                            5 Colors Available</span></a>
                                                            </h3>
                                                        </div>
                                                        <div class="shop-name">
                                                            <a href="#"><span>Shop Name</span></a>
                                                        </div>
                                                        <div class="rating-box">
                                                            <div class="rating medal readonly-rating" data-score="3" alt="shop-rating"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 infoprice">
                                                        <span class="value">US $9.99</span>
                                                        <span class="separator">/</span>
                                                        <span class="unit">piece</span>
                                                        <div class="rating-box">
                                                            <div class="rating readonly-rating" data-score="3"></div>
                                                            <span>3 Review(s)</span>
                                                        </div>
                                                        <div class="rate-history">
                                                            <span class="order-num">
                                                            <a href="" class="order-num-a">Orders  (3)</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container-fluid">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" >
                                                        <div class="add-to">
                                                            <a href="#"><i class="fa fa-heart-o"></i> <span class="icon-text">Add to wishlist</span></a>
                                                            <a href="#"><i class="fa fa-shopping-cart"></i> <span class="icon-text">Add to cart</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                        <div class="report text-right">
                                                            <a href="#"><i class="glyphicon glyphicon-flag"></i> <span class="icon-text">Report as fraud</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- paginate -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pagination-style">
                                <nav>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">6 <span class="sr-only">(current)</span></a></li>
                                        <li class="active"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('javascript')        
        <script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
        <script type="text/javascript" src="js/js_frontend/jquery.raty.js"></script>
        <script type="text/javascript" src="js/js_frontend/custom.js"></script>
@endsection