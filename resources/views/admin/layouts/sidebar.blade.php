<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
	  <!-- Sidebar user panel -->
	  <div class="user-panel">
		<div class="pull-left image">
		  <img src="{{ asset( '/for_admin_page/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
		  <p>{{Auth::user()->name}}</p>
		  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	  </div>
	  <!-- search form -->
	  <form action="#" method="get" class="sidebar-form">
		<div class="input-group">
		  <input type="text" name="q" class="form-control" placeholder="Search...">
		  <span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
				</button>
			  </span>
		</div>
	  </form>
	  <!-- /.search form -->
	  <!-- sidebar menu: : style can be found in sidebar.less -->
	  <ul class="sidebar-menu" data-widget="tree">
		<li class="treeview">
		  <a href="/admin/">
			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		  </a>
		</li>
		<li>
			<a href="{{route('categories.index')}}">
				<i class="fa fa-files-o"></i> <span>Danh mục</span>
			</a>
		</li>
		<li>
			<a href="{{route('trademarks.index')}}">
				<i class="fa fa-leaf"></i> <span>Thương hiệu</span>
			</a>
		</li>
		<li>
			<a href="{{route('products.index')}}">
				<i class="fa fa-certificate"></i> <span>Sản Phẩm</span>
			</a>
		</li>
		<li>
			<a href="{{route('orders.index')}}">
				<i class="fa fa-reorder"></i> <span>Đơn Hàng</span>
			</a>
		</li>
		<li>
			<a href="{{route('feedbacks.index')}}">
				<i class="fa fa-comments"></i> <span>Phản hồi của khách hàng</span>
			</a>
		</li>
		<li>
			<a href="{{route('customers.index')}}">
				<i class="fa fa-user"></i> <span>Khách hàng</span>
			</a>
		</li>
		<li>
			<a href="{{route('admins.index')}}">
				<i class="fa fa-user-secret"></i> <span>Admin</span>
			</a>
		</li>
		{{-- <li class="treeview">
		  <a href="#">
			<i class="fa fa-files-o"></i>
			<span>Layout Options</span>
			<span class="pull-right-container">
			  <span class="label label-primary pull-right">4</span>
			</span>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
			<li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
			<li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
			<li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
		  </ul>
		</li>
		<li>
		  <a href="../widgets.html">
			<i class="fa fa-th"></i> <span>Widgets</span>
			<span class="pull-right-container">
			  <small class="label pull-right bg-green">Hot</small>
			</span>
		  </a>
		</li>
		<li class="treeview">
		  <a href="#">
			<i class="fa fa-pie-chart"></i>
			<span>Charts</span>
			<span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
			</span>
		  </a>
		  <ul class="treeview-menu">
			<li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
			<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
			<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
			<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
		  </ul>
		</li> --}}
	  </ul>
	</section>
	<!-- /.sidebar -->
  </aside>