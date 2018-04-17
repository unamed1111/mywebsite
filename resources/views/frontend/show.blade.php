@extends('frontend.layouts.master')

@section('css')
        <link rel="stylesheet" type="text/css" href="css/css_frontend/productinfo.css">
        <link rel="stylesheet" href="css/css_frontend/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/css_frontend/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/css_frontend/settings.css" media="screen" />
        <link rel="stylesheet" href="css/css_frontend/animation.css">
        <link rel="stylesheet" href="css/css_frontend/owl.carousel.css">
        <link rel="stylesheet" href="css/css_frontend/owl.theme.css">
        <link rel="stylesheet" href="css/css_frontend/chosen.css">
        <link rel="stylesheet" type="text/css" href="css/css_frontend/jquery.raty.css">
@endsection

@section('content')
<!-- Start of Sidebar -->
<aside id="productinfo">
    <div class="row">
        <div class="container-fluid">
            <div class="col-xs-12">
                <div id="product-single">
                    <!-- Product -->
                    <div class="product-single">
                        <div class="row">
                            <!-- Product Images Carousel -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 product-single-image">
                                <div id="product-slider">
                                    <ul class="slides">
                                        <li>
                                            <img class="cloud-zoom" src="img/products/single1.jpg" data-large="img/products/sample1.jpg" alt=""/>
                                            <a class="fullscreen-button" href="img/products/single1.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="product-carousel">
                                    <ul class="slides">
                                        <li>
                                            <a class="fancybox" rel="product-images" href="img/products/single1.jpg"></a>
                                            <img src="img/products/single1.jpg" data-large="img/products/single1.jpg" alt=""/>
                                        </li>
                                        <li>
                                            <a class="fancybox" rel="product-images" href="img/products/single2.jpg"></a>
                                            <img src="img/products/single2.jpg" data-large="img/products/single2.jpg" alt="" />
                                        </li>
                                        <li>
                                            <a class="fancybox" rel="product-images" href="img/products/single3.jpg"></a>
                                            <img src="img/products/single3.jpg" data-large="img/products/single3.jpg" alt="" />
                                        </li>
                                        <li>
                                            <a class="fancybox" rel="product-images" href="img/products/single4.jpg"></a>
                                            <img src="img/products/single4.jpg" data-large="img/products/single4.jpg" alt="" />
                                        </li>
                                        <li>
                                            <a class="fancybox" rel="product-images" href="img/products/single5.jpg"></a>
                                            <img src="img/products/single5.jpg" data-large="img/products/single5.jpg" alt="" />
                                        </li>
                                    </ul>
                                    <div class="product-arrows">
                                        <div class="left-arrow">
                                            <i class="icons fa fa-caret-left"></i>
                                        </div>
                                        <div class="right-arrow">
                                            <i class="icons fa fa-caret-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 productinfo-style">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu</h2>
                                <div class="rating-box">
                                    <div class="rating readonly-rating" data-score="3"></div>
                                    <span>3 Review(s)</span>
                                </div>
                                <div class="product-price">
                                    <span>Tk 4.50</span>
                                </div>
                                <table class="product-actions-single">
                                    <tbody>
                                        <tr>
                                            <td>Quantity:</td>
                                            <td>
                                                <div class="numeric-input">
                                                    <input type="text" value="1">
                                                    <span class="arrow-up"><i class="icons fa fa-caret-up"></i></span>
                                                    <span class="arrow-down"><i class="icons fa fa-caret-down"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="total-price">
                                    <span class="total-price-text">Total Price:</span>
                                    <span class="total">Tk 500.0</span>
                                </div>
                                <div class="seller-info">
                                    <span>Selling by,</span>
                                    <a href="#">Arnab</a>
                                </div>
                                <div class="product-actions">
                                    <span class="green product-action current">
                                    <a href="#">
                                    <span class="action-wrapper">
                                    <i class="icons fa fa-credit-card"></i>
                                    <span class="action-name">Buy Now</span>
                                    </span>
                                    </a>
                                    </span>
                                    <span class="add-to-favorites">
                                    <a href="#">
                                    <span class="action-wrapper">
                                    <i class="icons fa fa-heart-o"></i>
                                    <span class="action-name">Add to wishlist</span>
                                    </span></a>
                                    </span>
                                    <span class="add-to-compare">
                                    <a href="#"> <span class="action-wrapper">
                                    <i class="icons fa fa-shopping-cart"></i>
                                    <span class="action-name">Add to cart</span>
                                    </span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product -->
                    <!-- Product Tabs -->
                    <div class="row tab-style">
                        <div class="container-fluid">
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs navtab-style">
                                    <li class="active"><a  data-toggle="tab" href="#tab1">Description</a></li>
                                    <li><a  data-toggle="tab" href="#tab2">Review</a></li>
                                    <li><a  data-toggle="tab" href="#tab3">Comments</a></li>
                                </ul>
                                <div class="page-content tab-content">
                                    <div id="tab1" class="tab-pane fade in active">
                                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. </p>
                                        <p><strong>Specifications:</strong></p>
                                        <ul>
                                            <li><i class="icons fa fa-caret-right"></i> Speaker type: Hi-Definition MicroSpeaker</li>
                                            <li><i class="icons fa fa-caret-right"></i> Frequency range: 25Hz-18.5kHz</li>
                                            <li><i class="icons fa fa-caret-right"></i> Impedance (1kHz): 26 Ohms</li>
                                            <li><i class="icons fa fa-caret-right"></i> Sensitivity (1mW): 114 dB SPL/mW</li>
                                            <li><i class="icons fa fa-caret-right"></i> Cable length (with extension): 18.0 in./45.0 cm (54.0 in./137.1 cm)</li>
                                        </ul>
                                        <p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. <br><br>
                                        Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. </p>
                                        <p class="tags home-green"><strong>Tags:</strong> <a href="#" class="tag-item">digital camera</a>
                                        <a href="#" class="tag-item">lorem</a>
                                        <a href="#" class="tag-item">gps</a></p>
                                    </div>
                                    <div id="tab2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="category-results">
                                                    <p>Results 1-6 of 6</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="pagination">
                                                    <a href="#"><div class="previous"><i class="icons fa fa-caret-left"></i></div></a>
                                                    <a href="#"><div class="page-button">1</div></a>
                                                    <a href="#"><div class="page-button">2</div></a>
                                                    <a href="#"><div class="page-button">3</div></a>
                                                    <a href="#"><div class="next"><i class="icons fa fa-caret-right"></i></div></a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="comments">
                                            <li>
                                                <p><strong><a href="#">Anna Doe</a></strong></p>
                                                <span class="date">2013-10-09 09:23</span>
                                                <i class="icons green fa fa-thumbs-o-up"></i>
                                                <i class="icons sum no-pointer green-sum">1</i>
                                                <i class="icons red fa fa-thumbs-o-down"></i>
                                                <i class="icons fa fa-reply"></i>
                                                <div class="rating-box">
                                                    <div class="rating readonly-rating" data-score="4"></div>
                                                </div>
                                                <br>
                                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                            </li>
                                            <li>
                                                <p><strong><a href="#">Anna Doe</a></strong></p>
                                                <span class="date">2013-10-09 09:23</span>
                                                <i class="icons green fa fa-thumbs-o-up"></i>
                                                <i class="icons sum no-pointer">0</i>
                                                <i class="icons red fa fa-thumbs-o-down"></i>
                                                <i class="icons fa fa-reply"></i>
                                                <div class="rating-box">
                                                    <div class="rating readonly-rating" data-score="4"></div>
                                                </div>
                                                <br>
                                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                                <ul>
                                                    <li>
                                                        <p><strong><a href="#">Anna Doe</a></strong></p>
                                                        <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p><strong><a href="#">Anna Doe</a></strong></p>
                                                <span class="date">2013-10-09 09:23</span>
                                                <i class="icons green fa fa-thumbs-o-up"></i>
                                                <i class="icons sum no-pointer red-sum">-2</i>
                                                <i class="icons red fa fa-thumbs-o-down"></i>
                                                <i class="icons fa fa-reply"></i>
                                                <div class="rating-box">
                                                    <div class="rating readonly-rating" data-score="4"></div>
                                                </div>
                                                <br>
                                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                            </li>
                                        </ul>
                                        <h3>WRITE A REVIEW</h3>
                                        <p>Now please write a (short) review....(min. 200, max. 2000 characters)</p>
                                        <textarea id="review-textarea"></textarea>
                                        <p>First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best)</p>
                                        <div class="rating-box">
                                            Rating:
                                            <div class="rating rate" data-score="3"></div>
                                        </div>
                                        <div class="char-counter">
                                            <label>Characters written</label>
                                            <input data-target="#review-textarea" type="text">
                                        </div>
                                        <br>
                                        <input type="submit" class="dark-blue big" value="Submit a review">
                                    </div>
                                    <div id="tab3" class="tab-pane fade">
                                        <ul class="comments">
                                            <li>
                                                <p><strong><a href="#">Anna Doe</a></strong></p>
                                                <span class="date">2013-10-09 09:23</span>
                                                <i class="icons fa fa-reply"></i>
                                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                            </li>
                                            <li>
                                                <p><strong><a href="#">Anna Doe</a></strong></p>
                                                <span class="date">2013-10-09 09:23</span>
                                                <i class="icons fa fa-reply"></i>
                                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                                <ul>
                                                    <li>
                                                        <p><strong><a href="#">Anna Doe</a></strong></p>
                                                        <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p><strong><a href="#">Anna Doe</a></strong></p>
                                                <span class="date">2013-10-09 09:23</span>
                                                <i class="icons fa fa-reply"></i>
                                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="button home-green"><i class="icons icon-spinner"></i> Refresh comments list</a>
                                        <a href="#" class="button orange"><i class="icons icon-rss"></i> RSS feed for comments to this post</a>
                                        <br/><br/>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <h3>ADD A COMMENT</h3>
                                                <label>Name (required)</label>
                                                <input type="text">
                                                <br><br>
                                                <label>E-mail (required, but will not display)</label>
                                                <input type="text">
                                                <br><br>
                                                <label>Website (required)</label>
                                                <input type="text">
                                                <br><br>
                                                <label>Comment (required)</label>
                                                <textarea></textarea>
                                                <br><br>
                                                <input id="comments-checkbox" type="checkbox"><label for="comments-checkbox">Notify me of follow-up comments</label>
                                                <br><br>
                                                <img src="img/captcha.jpg" alt="">
                                                <br><br>
                                                <label><a href="#">Refresh</a></label>
                                                <input type="text">
                                                <br><br>
                                                <input type="submit" value="Submit comment" class="dark-blue big">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Related Product -->
<section id="related-product" class="product-content">
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-2 col-xs-2">
                <h4>
                <a href="#">
                <i>Related Products</i>
                </a>
                </h4>
            </div>
            <div class="col-sm-offset-9 col-xs-offset-9 col-sm-1 col-xs- text-center">
                <h4>
                <a href="#"><i>View more</i></a>
                </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-12 col-xs-12">
                <div class="row first-row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product2.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
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
                <div class="row second-row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product2.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
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
            </div>
        </div>
    </div>
</section>
<!-- Products On Sale -->
<section id="products-on-sale" class="product-content">
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-2 col-xs-2">
                <h4>
                <a href="#">
                <i>PRODUCTS ON SALE</i>
                </a>
                </h4>
            </div>
            <div class="col-sm-offset-9 col-xs-offset-9 col-sm-1 col-xs- text-center">
                <h4>
                <a href="#"><i>View more</i></a>
                </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-sm-12 col-xs-12">
                <div class="row first-row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product2.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
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
                <div class="row second-row">
                    <div class="container-fluid">
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product1.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
                            <img class="product-image" src="images/home/product2.jpg" alt="" />
                            <span>US $4.50</span>
                            <div class="rating-box">
                                <div class="rating readonly-rating" data-score="3"></div>
                                <span>3 Review(s)</span>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div class="col-sm-3 col-xs-3 product-info text-center">
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
            </div>
        </div>
    </div>
</section>
@endsection



@section('javascript')
    <script src="js/js_frontend/modernizr.min.js"></script>
    <script type="text/javascript" src="js/js_frontend/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/js_frontend/jquery.raty.js"></script>
    <!-- Scroll Bar -->
    <script src="js/js_frontend/perfect-scrollbar.min.js"></script>
    <!-- Cloud Zoom -->
    <script src="js/js_frontend/zoomsl-3.0.min.js"></script>
    <!-- FancyBox -->
    <script src="js/js_frontend/jquery.fancybox.pack.js"></script>
    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="js/js_frontend/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/js_frontend/jquery.themepunch.revolution.min.js"></script>
    <!-- FlexSlider -->
    <script defer src="js/js_frontend/flexslider.min.js"></script>
    <!-- IOS Slider -->
    <script src = "js/js_frontend/jquery.iosslider.min.js"></script>
    <!-- noUi Slider -->
    <script src="js/js_frontend/jquery.nouislider.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/js_frontend/owl.carousel.min.js"></script>
    <!-- Cloud Zoom -->
    <script src="js/js_frontend/zoomsl-3.0.min.js"></script>
    <!-- SelectJS -->
    <script src="js/js_frontend/chosen.jquery.min.js" type="text/javascript"></script>
    <!-- Main JS -->
    <script src="js/js_frontend/main-script.js"></script>
    <script src="js/js_frontend/custom.js"></script>
@endsection