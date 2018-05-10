<div class="headerzone">
  <div class="header">
    <a href="#"><img src="images/home/logo1.png" height="100"></a>
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
            <li><a href="#">{{$trademark->trademark_name}}</a></li>
          @endforeach
          </ul>
        </li>
        @foreach($categories as $category)
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <div class="bibau">{{$category->category_name}}</div>
          </a>
          <ul class="dropdown-menu" role="menu">
          @foreach($category->trademark as $trademark)
            <li><a href="#">{{$trademark->trademark_name}}</a></li>
          @endforeach
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<div class="clear"></div>
