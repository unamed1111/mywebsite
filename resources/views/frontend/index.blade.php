@extends('frontend.layouts.master')

@section('css')
        <link href="css/css_frontend/index.css" rel="stylesheet">
        <!-- Half-slider CSS -->
        <link href="css/css_frontend/half-slider.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/css_frontend/jquery.raty.css">
@endsection
@section('content')
	
<!-- Half Page Image Background Carousel Header -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
                <h2>Caption 1</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
    </a>
</div>
<!-- Product On Sale -->
<section id="product-on-sale" class="product-content">
    <div class="row">
        <div class="container-fluid">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <h4>
                <a href="#">
                <i>PRODUCT'S ON SALE</i>
                </a>
                </h4>
            </div>
            <div class="col-lg-offset-2 col-lg-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
                <h4>
                <a href="#"><i>View more</i></a>
                </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-4 col-xs-4 logo">
                <img src="images/home/url.jpg" alt="" />
            </div>
            <div class="col-sm-8 col-xs-8">
                <div class="row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/girl4.jpg" alt="" />
                            <span>US $4.50</span>
                            <del>US $5.50</del>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/girl4.jpg" alt="" />
                            <span>US $4.50</span>
                            <del>US $5.50</del>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/url.jpg" alt="" />
                            <span>US $4.50</span>
                            <del>US $5.50</del>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/girl4.jpg" alt="" />
                            <span>US $4.50</span>
                            <del>US $5.50</del>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/girl4.jpg" alt="" />
                            <span>US $4.50</span>
                            <del>US $5.50</del>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/girl4.jpg" alt="" />
                            <span>US $4.50</span>
                            <del>US $5.50</del>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start of top rated-->
<section id="top-rated" class="product-content">
    <div class="row">
        <div class="container-fluid">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <h4>
                <a href="#">
                <i>TOP RATED</i>
                </a>
                </h4>
            </div>
            <div class="col-lg-offset-2 col-lg-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
                <h4>
                <a href="#"><i>View more</i></a>
                </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-4 col-xs-4 logo">
                <img  src="images/home/girl1.jpg" alt="" />
            </div>
            <div class="col-sm-8 col-xs-8">
                <div class="row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/product2.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/product3.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/product3.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/product8.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-4 col-xs-4 product-info text-center">
                            <img class="product-image" src="images/home/product9.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Best Seller -->
@endsection


@section('javascript')
    <script type="text/javascript" src="js/js_frontend/jquery.raty.min.js"></script>
    <script type="text/javascript" src="js/js_frontend/jquery.raty.js"></script>
    <script type="text/javascript" src="js/js_frontend/custom.js"></script>
@endsection