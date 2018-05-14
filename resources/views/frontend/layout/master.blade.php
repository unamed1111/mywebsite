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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/css_frontend/style.css" rel="stylesheet" type="text/css" />
<link href="/css/css_frontend/app.css" rel="stylesheet" type="text/css" />
<link href="/css/css_frontend/responsive.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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
		    	<a href="#"><img src="/images/home/logo1.png" height="100"></a>
		  	</div>
			<div class="container">
				<div class="row">
			  		<ul class="nav nav-tabs">
			        	<li class="dropdown">
			          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			            		<div class="bibau">Thương hiệu</div>
			          		</a>
			          		<ul class="dropdown-menu" role="menu">
			          		@foreach($trademarks as $trademark)
			            		<li><a href="{{route('products',$trademark->id)}}">{{$trademark->trademark_name}}</a></li>
			          		@endforeach
			          		</ul>
			        	</li>
			        	@foreach($categories as $category)
			        		<li class="dropdown">
			          			<a class="dropdown-toggle" data-toggle="dropdown" href="">
			            			<div class="bibau">{{$category->category_name}}</div>
			          			</a>
			          			<ul class="dropdown-menu" role="menu">
			          			@foreach($category->trademark as $trademark)
			            			<li><a href="{{route('products',$trademark->id)}}">{{$trademark->trademark_name}}</a></li>
			          			@endforeach
			          			</ul>
			        		</li>
			        	@endforeach
			      	</ul>
    			</div>
  			</div>
		</div>
		<div class="clear"></div>

		@yield('banner')
		@yield('underbanner')
		@yield('nav')

		<div class="footer">
			<ul style="color:#FFF;">
      			Copyright (c) Sitename.com. All rights reserved. Design by Stylish <a href="http://www.stylishtemplate.com" style="color:#FFF;">Website Templates</a>.
    		</ul>
		</div>
	</div>
	<div class="cart-box" id="Normal">
    <a class="btn btn-success btn-circle btn-xl" href="{{route('cart.index')}}">
      <i class="fa fa-shopping-cart"></i>
      <span class="badge badge-light">{{Cart::count()}}</span>
        </a>
    </div>
</body>
</html>