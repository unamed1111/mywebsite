@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Edit
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Product</li>
          <li class="active">Edit</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Product</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                      {{-- form-in-here --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('product_name') ? 'has-error' : "" }}">
                            <label for="product_name">Product</label>
                            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product" value="{{ $product->product_name}}">
                            @if($errors->has('product_name'))
                              <span class="help-block">
                                <strong>{{$errors->first('product_name')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 {{ $errors->has('price') ? 'has-error' : "" }}">
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Price" value="{{$product->price}}">
                             @if($errors->has('price'))
                              <span class="help-block">
                                <strong>{{$errors->first('price')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('category_id') ? 'has-error' : "" }}">
                            <label for="product_name">Category</label>
                            <select class="form-control select2" name="category_id" style="width: 100%;">
                              @foreach($categories as $category)
                              <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : "" }}>{{$category->category_name}}</option>
                              @endforeach
                            </select>
                             @if($errors->has('category_id'))
                              <span class="help-block">
                                <strong>{{$errors->first('category_id')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('trade_mark_id') ? 'has-error' : "" }}">
                            <label for="trademare_id">TradeMark</label>
                            <select class="form-control select2" name="trade_mark_id" style="width: 100%;">
                              @foreach($trademarks as $trademark)
                              <option value="{{$trademark->id}}" {{ $product->trade_mark_id == $trademark->id ? 'selected' : "" }}>{{$trademark->trademark_name}}</option>
                              @endforeach
                            </select>
                             @if($errors->has('trade_mark_id'))
                              <span class="help-block">
                                <strong>{{$errors->first('trade_mark_id')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('glass') ? 'has-error' : "" }}">
                            <label for="glass">Mặt kính</label>
                            <input type="text" name="glass" class="form-control" id="glass" placeholder="Mặt kính" value="{{$product->detail->glass}}">
                             @if($errors->has('glass'))
                              <span class="help-block">
                                <strong>{{$errors->first('glass')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('guarantee') ? 'has-error' : "" }}">
                            <label for="guarantee">Năm bảo hành</label>
                            <input type="number" name="guarantee" class="form-control" id="guarantee" placeholder="Năm bảo hành" value="{{$product->detail->guarantee}}">
                             @if($errors->has('guarantee'))
                              <span class="help-block">
                                <strong>{{$errors->first('guarantee')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('energy') ? 'has-error' : "" }}">
                            <label for="energy">Năng lượng máy</label>
                            <select class="form-control select2" name="energy" style="width: 100%;">
                              {{-- <?php $watch_energy = array_merge(['' => 'Chọn năng lượng máy'],WATCH_ENERGY)?> --}}
                              @foreach( array_merge(['' => 'Chọn năng lượng máy'],WATCH_ENERGY) as $key_e => $value_e )
                              <option value="{{$key_e}}" {{ $product->detail->energy == $key_e ? 'selected' : "" }} >{{$value_e}}</option>
                              @endforeach    
                            </select>
                             @if($errors->has('energy'))
                              <span class="help-block">
                                <strong>{{$errors->first('energy')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('case') ? 'has-error' : "" }}">
                            <label for="case">Chất liệu vỏ</label>
                            <select class="form-control select2" name="case" style="width: 100%;">
                              @foreach( array_merge(['' => 'Chọn chất liệu vỏ'],WATCH_CASE) as $key_c => $value_c)
                              <option value=" {{$key_c}}" {{ $product->detail->case == $key_c ? 'selected' : "" }}>{{$value_c}}</option>
                              @endforeach
                            </select>
                             @if($errors->has('case'))
                              <span class="help-block">
                                <strong>{{$errors->first('case')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('watch_chain') ? 'has-error' : "" }}">
                            <label for="watch_chain">Chất liệu dây</label>
                            <select class="form-control select2" name="watch_chain" style="width: 100%;">
                              @foreach( array_merge(['' => 'Chọn chất liệu dây'],WATCH_CHAIN) as $key_ch => $value_ch)
                              <option value=" {{$key_ch}}" {{ $product->detail->watch_chain == $key_ch ? 'selected' : "" }}>{{$value_ch}}</option>
                              @endforeach
                            </select>
                             @if($errors->has('watch_chain'))
                              <span class="help-block">
                                <strong>{{$errors->first('watch_chain')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('diameter') ? 'has-error' : "" }}">
                            <label for="diameter">Đường kính vỏ</label>
                            <input type="text" name="diameter" class="form-control" id="diameter" placeholder="Đường kính vỏ" value="{{$product->detail->diameter}}">
                            </select>
                             @if($errors->has('diameter'))
                              <span class="help-block">
                                <strong>{{$errors->first('diameter')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('waterproof') ? 'has-error' : "" }}">
                            <label for="waterproof">Độ chống nước (ATM)</label>
                            <input type="text" name="waterproof" class="form-control" id="waterproof" placeholder="Độ chống nước (ATM)" value="{{$product->detail->waterproof}}">
                             @if($errors->has('waterproof'))
                              <span class="help-block">
                                <strong>{{$errors->first('waterproof')}}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group {{ $errors->has('total_qty') ? 'has-error' : "" }}">
                            <label for="total_qty">Số lương</label>
                            <input type="number" name="total_qty" class="form-control" id="total_qty" placeholder="Số lương" value="{{$product->detail->total_qty}}">
                             @if($errors->has('total_qty'))
                                <span class="help-block">
                                  <strong>{{$errors->first('total_qty')}}</strong>
                                </span>
                              @endif
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group {{ $errors->has('category_name') ? 'has-error' : "" }}">
                            <label for="description">Chi tiết</label>
                            <textarea class="textarea" placeholder="Description"
                                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{$product->description}}</textarea>
                          </div>
                        </div>
                      </div> 
                      {{-- image --}}
                      <div class="row">
                        <?php $imgs = json_decode($product->detail->image); ?>
                      @foreach($imgs as $img)
                        <div class="col-md-4">
                          <label for="name" class="control-label">{{ __('Ảnh 1') }}</label>
                          <div class="img-preview">
                              <input type="file" class="image image-upload" name="image[]">
                              <a class="example-image-link" href="" data-lightbox="example-6" data-title="">
                              <img src="{{ asset($img)}}" class="img-preview img-fluid", alt="" width="100%" height="100%">
                              </a> 
                          </div>
                        </div>
                      @endforeach  
                      </div>
                      {{-- endimage --}}
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
              </div>
              <!-- /.box-body -->
              

              
            </div>
      </section>
    </div>
@endsection

@section('javascript')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).parent().find('.img-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function () {
        $("input:file").change(function () {
            readURL(this);
        });
    });
</script>
@endsection