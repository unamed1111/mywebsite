<script type="text/javascript">
	$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
<div class="underbanner">
	<div class="well well-sm">
        <a class="btn btn-success" href="#">Sản phẩm nổi bật</a>
    </div>
    @foreach($product as $product)
    <div class="item col-lg-3">
        <div class="thumbnail">
            <a href="{{route('details',$product->id)}}"><img class="group list-group-image" src="{{json_decode($product->detail->image)[0]}}" alt=""></a>
            <div class="caption">
                <a class="bibau2" href="{{route('details',$product->id)}}"><h4 class="group inner list-group-item-heading">{{$product->trademark->trademark_name}}</h4></a>
                <a class="bibau1" href="{{route('details',$product->id)}}"><h4 class="group inner list-group-item-heading">{{$product->product_name}}</h4></a>
                <div class="row">
                    <div class="lead">{{$product->price}}</div>   
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>
<div class="clear"></div>
