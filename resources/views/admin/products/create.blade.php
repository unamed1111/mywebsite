@extends('admin.layouts.master')

@section('content')
	 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Product</li>
          <li class="active">Create</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      		<div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Categories</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form role="form" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                      {{-- form-in-here --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="product_name">Product</label>
                            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="product_name">Category</label>
                            <select class="form-control select2" name="category_id" style="width: 100%;">
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->category_name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="trademare_id">TradeMark</label>
                            <select class="form-control select2" name="trade_mark_id" style="width: 100%;">
                              @foreach($trademarks as $trademark)
                              <option value="{{$trademark->id}}">{{$trademark->trademark_name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="glass">Mặt kính</label>
                            <input type="text" name="glass" class="form-control" id="glass" placeholder="Mặt kính">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="guarantee">Năm bảo hành</label>
                            <input type="number" name="guarantee" class="form-control" id="guarantee" placeholder="Năm bảo hành">
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="energy">Năng lượng máy</label>
                            <select class="form-control select2" name="energy" style="width: 100%;">
                              {{-- <?php $watch_energy = array_merge(['' => 'Chọn năng lượng máy'],WATCH_ENERGY)?> --}}
                              @foreach( array_merge(['' => 'Chọn năng lượng máy'],WATCH_ENERGY) as $key_e => $value_e )
                              <option value="{{$key_e}}">{{$value_e}}</option>
                              @endforeach    
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="case">Chất liệu vỏ</label>
                            <select class="form-control select2" name="case" style="width: 100%;">
                              @foreach( array_merge(['' => 'Chọn chất liệu vỏ'],WATCH_CASE) as $key_c => $value_c)
                              <option value=" {{$key_c}} ">{{$value_c}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="watch_chain">Chất liệu dây</label>
                            <select class="form-control select2" name="watch_chain" style="width: 100%;">
                              @foreach( array_merge(['' => 'Chọn chất liệu dây'],WATCH_CHAIN) as $key_ch => $value_ch)
                              <option value=" {{$key_ch}} ">{{$value_ch}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="diameter">Đường kính vỏ</label>
                            <input type="text" name="diameter" class="form-control" id="diameter" placeholder="Đường kính vỏ">
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="waterproof">Độ chống nước (ATM)</label>
                            <input type="text" name="waterproof" class="form-control" id="waterproof" placeholder="Độ chống nước (ATM)">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="total_qty">Số lương</label>
                            <input type="number" name="total_qty" class="form-control" id="total_qty" placeholder="Số lương">
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="description">Chi tiết</label>
                            <textarea class="textarea" placeholder="Description"
                                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"></textarea>
                          </div>
                        </div>
                      </div> 
                      {{-- image --}}
                      <div class="row">
                        <div class="col-md-4">
                          <label for="name" class="control-label">{{ __('Ảnh 1') }}</label>
                          <div class="img-preview">
                              <input type="file" class="image image-upload" name="image[]">
                              <a class="example-image-link" href="" data-lightbox="example-6" data-title="">
                              <img src="" class="img-preview img-fluid", alt="" width="100%" height="100%">
                              </a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="name" class="control-label">{{ __('Ảnh 2') }}</label>
                          <div class="img-preview">
                              <input type="file" class="image image-upload" name="image[]">
                              <a class="example-image-link" href="" data-lightbox="example-6" data-title="">
                              <img src="" class="img-preview img-fluid", alt="" width="100%" height="100%">
                              </a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="name" class="control-label">{{ __('Ảnh 3') }}</label>
                          <div class="img-preview">
                              <input type="file" class="image image-upload" name="image[]">
                              <a class="example-image-link" href="" data-lightbox="example-6" data-title="">
                              <img src="" class="img-preview img-fluid", alt="" width="100%" height="100%">
                              </a>
                          </div>
                        </div>
                      </div>
                      {{-- endimage --}}
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Create</button>
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