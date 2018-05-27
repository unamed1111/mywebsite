<!DOCTYPE html>
<html>
<head>
<title>Shop Watch</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/js_frontend/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/js_frontend/bootstrap-dropdownhover.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/js_frontend/myscript.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/css_frontend/style.css" rel="stylesheet" type="text/css" />
<link href="/css/css_frontend/app.css" rel="stylesheet" type="text/css" />
<link href="/css/css_frontend/responsive.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<script src="{{ asset( '/for_admin_page/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>

</head>
<body>
  <div id="wrapper">
    <div class="headerzone">
        <div class="header">
          <a href="{{route('index')}}"><img src="/images/home/logo1.png" height="100"></a>
            <div class="top-right">
                <ul>
                  <li>
                    <form class="navbar-form" action="{{route('search')}}" method="GET">
                        <input style="height: 31px;" class="form-control" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Tìm sản phẩm" type="text">
                        <button type="submit" class="btn btn-default" style="height: 31px;"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</button>                         
                    </form>
                </li>
                @guest
                                <li><a href="{{ route('cus.login') }}">{{ __('Đăng nhập') }}</a></li>
                                <li><a href="{{ route('cus.register') }}">{{ __('Đăng ký') }}</a></li>
                            @else
                                <li><a href="#">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>                                 
                                </li>
                            @endguest
                </ul>
                <li style="margin-right: 50px;">
                  <i style="float: right;"><span class="glyphicon glyphicon-phone"></span>HOTLINE:</i>
                </li>
                <li style="margin-right: 10px;">
                  <i style="float: right;">123.456.7890 - 123.456.7890</i>
                </li>

            </div>
            <div class="clear"></div>         
        </div>
        <div class="clear"></div>
      <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <div class="bibau" style="color: white; font-weight: bold;">Thương hiệu</div>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                    @foreach($trademarks as $trademark)
                      <li><a href="{{ route('list',[$trademark->id,1]) }}">{{$trademark->trademark_name}}</a></li>
                    @endforeach
                    </ul>
                </li>
                @foreach($categories as $category)
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        <div class="bibau" style="color: white; font-weight: bold;">{{$category->category_name}}</div>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                      @foreach($category->trademark as $trademark)
                        <li><a href="/frontend/products/{{$category->id}}/{{$trademark->id}}/{{$value=1}}/{{$energy=2}}">{{$trademark->trademark_name}}</a></li>
                      @endforeach
                      </ul>
                  </li> 
                @endforeach
              </ul>
          </div>
        </div>
    </div>
    <div class="clear"></div>

  <div class="underbanner">
    <div class="workZone">
      <div class="midBox">
        <div class="topBox">
          <div class="bottomBox">
            <div class="leftBox">


              <div class="box1">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>Thương hiệu</div>
                  @foreach($trademarks as $trademarks)
                  <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">{{$trademarks->trademark_name}}</a></div>
                  @endforeach
                <div class="clear"></div>
              </div>


              <div class="box2">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>Khoảng giá</div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Dưới 100 triệu</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Từ 100 - 300 triệu</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Từ 300 - 500 triệu</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Từ 500 triệu</a></div>
                <div class="clear"></div>
              </div>


              <div class="box2">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>năng lượng</div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Đồng hồ cơ</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Đồng hồ điện tử</a></div>
                <div class="clear"></div>
              </div>


              <div class="box2">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>loại dây</div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Dây da</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Thép không gỉ</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Mạ vàng</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Mạ đồng</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Cao su</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Dây nhựa</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Dây vải, dù</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Hợp kim thép</a></div>
                <div class="clear"></div>
              </div>


              <div class="box2">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>loại vỏ</div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Thép không gỉ</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Mạ vàng</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Vàng nguyên khối</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Mạ đồng</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Cao su</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Vỏ nhựa</a></div>
                <div class="leftText"><span class="fa fa-minus-square"></span><a href="#" class="boldText" style="color: black;">Hợp kim thép</a></div>
                <div class="clear"></div>
              </div>


              <div class="clear"></div>
            </div>
            <div class="workZoneRight">
              <div class="rightBox inner">
                <div style="padding:0 15px 20px 15px;">
                              
                  @yield('content')
                  
                </div>
              </div>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
   

<div class="footer">
  <div class="footer1">
  <div class="container-fluid">
    
    <div class="container ">
    <div class="row">
      <div class="col-sm-4">
        <h2>About Us</h2><p>
                             <div class="myframegmap"> 
                             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14900.82102572999!2d105.78793714999999!3d20.9844078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33f9723553ecff7d!2zQ28ub3BtYXJ0IEjDoCDEkMO0bmc!5e0!3m2!1svi!2s!4v1527061634905" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div></p><br>
      </div>
      <div class="col-sm-3">
        <h2>Home</h2>
        <p>
          <i class="fa fa-home"></i>    <a href="#"> Home</a><br>
          <i class="fa fa-user-o"></i>    <a href="#"> About Us</a><br>
          <i class="fa fa-map-marker"></i>    <a href="#"> Contact Us</a><br>
          <i class="fa fa-briefcase"></i>    <a href="#"> Services</a><br>
          <i class="fa fa-question-circle"></i>    <a href="#"> Term & Conditions</a><br><br>


        </p>


      </div>
      <div class="col-sm-2">
        <h2>Contact Us</h2>
        <p >
         
          <i class="fa fa-phone"></i>    <a href="tel:0123456789"> +0123456789</a><br>
          <i class="fa fa-envelope"></i>    <a href="mailto:abc@abc.com"> abc@abc.com</a><br>
          <i class="fa fa-map-marker"></i>     A-101 Delhi, India
        </p>
          
        <br>
      </div>
    </div>
      <div class="clear30"></div>
  </div>
  </div>
  </div>


  <div class="footer2">
    <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="clear30"></div>
        <div class="col-sm-9 text-center"><p><strong>copyright © 2013-2018 All right reserved.</strong></p></div>
        <div class="clear30"></div>
      </div>
      
    </div>
    
  </div>
</div>
</div>
<div class="class"></div>


    
  </div>
  <div class="cart-box" id="Normal">
    <a class="btn btn-success btn-circle btn-xl" href="{{route('cart.index')}}">
      <i class="fa fa-shopping-cart"></i>
      <span class="badge badge-light">{{Cart::count()}}</span>
        </a>
    </div>
</body>
</html>