<!DOCTYPE html>
<html>
<head>
	@include('frontend.layout.head')
</head>
<body>
	<div id="wrapper">

		@include('frontend.layout.header')
		@yield('banner')
		@yield('underbanner')
		@yield('nav')
		@include('frontend.layout.footer')
	</div>
	<div class="cart-box" id="Normal">
    <ul class="nav navbar-nav">
        <li class="dropdown">
          <button href="#" class="draggable dropdown-toggle btn btn-success btn-circle btn-xl" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span></button>
           <span  class="cart-items-count"><span class=" notification-counter">243</span></span>
        </li>
      </ul>
</div>
</body>
</html>