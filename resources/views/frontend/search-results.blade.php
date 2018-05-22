@extends('frontend.layout.master')

@section('underbanner')
<script type="text/javascript">
    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>

<div class="underbanner">
    <div class="clear"></div>
    <div class="box-body" style="background: white;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Ảnh</th>
                  <th>Tên sản phẩm</th>
                  <th>Thương hiệu</th>
                  <th>Giá</th>
                </tr>
                </thead>
                @foreach($products as $product)
                <tr>
                  <td><a href="{{ route('details',$product->id)}}"><img src="{{json_decode($product->detail->image)[0]}}" style="width: 100px; height: 100px;" ></a></td>
                  <td><a class="bibau1" href="{{ route('details',$product->id)}}"><h4 class="group inner list-group-item-heading">{{$product->product_name}}</h4></a></td>
                  <td><p class="bibau2"><h4 class="group inner list-group-item-heading">{{$product->trademark->trademark_name}}</h4></p></td>
                  <td><div class="lead">{{$product->price}}</div></td>
                </tr>
                @endforeach
              </table>
            </div>
</div>
<div class="clear"></div>
@endsection

<link href="https://code.jquery.com/jquery-1.12.4.js" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>