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
			        	<li class="dropdown">
			        	<a href="#">
			            	<div class="bibau" style="color: white; font-weight: bold;">tin tức & sự kiện</div>
			          	</a>
			          	</li>
			      	</ul>
    			</div>
  			</div>
		</div>