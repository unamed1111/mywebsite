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
        <a class="btn btn-success" href="#">{{$aaa->trademark_name}}</a>
    </div>
    @foreach($products as $products)
    <div class="item col-lg-6">
        <div class="thumbnail">
            <a href="{{route('details',$products->id)}}"><img class="group list-group-image" src="/images/home/gallery2.jpg" alt=""></a>
            <div class="caption">
                <a class="bibau1" href="{{route('details',$products->id)}}"><h4 class="group inner list-group-item-heading">{{$aaa->trademark_name}}</h4></a>
                <a class="bibau2" href="{{route('details',$products->id)}}"><h4 class="group inner list-group-item-heading">{{$products->product_name}}</h4></a>
                <div class="row">
                    <div class="lead">{{$products->price}}</div>   
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="clear"></div>

@endsection
