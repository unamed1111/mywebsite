@extends('frontend.layout.nav1')

@section('leftbox')
      <div class="box1">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>tin tức & sự kiện</div>
                  
                    <div class="leftText"><span></span><a href="#" class="boldText" style="color: black;"></a></div>
                <div class="clear"></div>
            </div>
@endsection

@section('content')
			<div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$event->title}}</h3>
                </div>
              <!-- /.box-header -->
                <div class="box-body">
                    <div class="panel-body table-responsive">
                        <div class="row">
                            {!! $event->content !!}
                        </div>
                    </div>
                </div>
              <!-- /.box-body -->
            </div>
@endsection