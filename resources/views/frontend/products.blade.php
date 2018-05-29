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
        <select id="orderBy" style="float: right; height: 35px; font-weight: bold;">
            <option value="" {{ request()->query('orderBy') == "" ? "selected" : "" }}>SẮP XẾP THEO GIÁ:</option>
            <option value="ASC" {{ request()->query('orderBy') == "ASC" ? "selected" : "" }}>Giá: Từ cao xuống thấp</option>
            <option value="DESC" {{ request()->query('orderBy') == "DESC" ? "selected" : "" }}>Giá: Từ thấp đến cao</option>
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
@section('js')
<script>
    $(document).ready(function() {
        $("#search_price,#search_energy,#search_chain,#search_case,#orderBy").on('change', function(){
              var url = "{!! http_build_query(Request::except('search_price','search_energy','search_chain','search_case','orderBy')) !!}";
            if (url.length > 0) {
                location.href = window.location.pathname + "?" + url +"&search_price=" +$('#search_price').val() +"&search_energy=" +$('#search_energy').val() +"&search_chain=" +$('#search_chain').val() +"&search_case=" +$('#search_case').val() +"&orderBy=" +$('#orderBy').val();
            } else {
                location.href = window.location.pathname + "?search_price=" +$('#search_price').val() +"&search_energy=" +$('#search_energy').val() +"&search_chain=" +$('#search_chain').val() +"&search_case=" +$('#search_case').val() +"&orderBy=" +$('#orderBy').val();
            }
        });
    });
</script>
@endsection
