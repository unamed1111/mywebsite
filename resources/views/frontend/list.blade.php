@extends('frontend.layout.nav')

@section('content')
<script type="text/javascript">
    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
<div class="underbanner">
    <div class="well well-sm">
        <a class="btn btn-success" href="#">aa</a>
        <select style="float: right; height: 35px; font-weight: bold;">
            <option>Sắp xếp theo</option>
            <option value="1">Giá: Từ cao xuống thấp</option>
            <option value="2">Giá: Từ thấp đến cao</option>
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
                    <div class="lead">{{$product->price}}</div>   
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="clear"></div>

@endsection
