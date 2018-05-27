@extends('frontend.layout.nav')

@section('content')
<script type="text/javascript">
    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
      });
    });
</script>
<div class="underbanner">
    <div class="well well-sm">
        <a class="btn btn-success">KẾT QUẢ</a>
        <select id="dynamic_select" style="float: right; height: 35px; font-weight: bold;">
            <option>SẮP XẾP THEO GIÁ:</option>
            <option value="/frontend/products/{{$id_category}}/{{$id_trademark}}/{{$value=1}}/{{$price}}/{{$energy}}">Giá: Từ cao xuống thấp</option>
            <option value="/frontend/products/{{$id_category}}/{{$id_trademark}}/{{$value=2}}/{{$price}}/{{$energy}}">Giá: Từ thấp đến cao</option>
        </select>
    </div>
    @foreach($products as $product)
    <div class="item col-lg-4">
        <div class="thumbnail">
            <a href="{{ route('details',$product->id)}}"><img class="group list-group-image" src="{{json_decode($product->detail->image)[0]}}" alt=""></a>
            <div class="caption">
                <a class="bibau2" href="{{ route('details',$product->id)}}"><h4 class="group inner list-group-item-heading">{{$product->trademark->trademark_name}}</h4></a>
                <a class="bibau1" href="{{ route('details',$product->id)}}"><h4 class="group inner list-group-item-heading">{{$product->product_name}}</h4></a>
                <div class="row">
                    <div class="#" style="color:red;font-size:16px;font-family: 'Pattaya', sans-serif;font-weight: bold;">{{$product->price}}</div>   
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="clear"></div>
</div>
<div class="clear"></div>

@endsection
