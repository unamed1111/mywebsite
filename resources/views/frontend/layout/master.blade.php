<!DOCTYPE html>
<html>
<head>
	@include('frontend.layout.head')
</head>
<body>
	<div id="wrapper">
		@include('frontend.layout.header')
		@yield('banner')
		@yield('nav')
		@include('frontend.layout.footer')
	</div>
</body>
</html>