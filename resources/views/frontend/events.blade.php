@extends('frontend.layout.nav1')

@section('leftbox')
			<div class="box1">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>tin tức & sự kiện</div>
                      <?php $stt = 1; ?>
                	   @foreach($events as $event)
                  	<div class="leftText"><span></span><a href="#" class="boldText" style="color: black;">{{$stt++}}. {{$event->title}}</a></div>
                    @endforeach
                <div class="clear"></div>
            </div>
@endsection

@section('content')
  <div class="title h1 text-center">Tin tức & Sự kiện</div>
  @foreach($events as $event)
  <div class="card float-left">
    <div class="row ">
      <div class="box-header with-border">
                    <h4 class="bibau">{{$event->title}}</h4>
                </div>
      <div class="col-sm-7">
        <div class="card-block">
          <div class="box box-success">
              <!-- /.box-header -->
                <div class="box-body">
                    <div class="panel-body table-responsive">
                        <div class="row">
                            {!! str_limit($event->content, $word = 200, $end = '...') !!}
                        </div>
                    </div>
                </div>
              <!-- /.box-body -->
            </div>
          <a href="{{ route('eventdetail',$event->id) }}" class="btn btn-primary btn-sm">Đọc thêm</a>
        </div>
      </div>

      <div class="col-sm-5">
        <img class="d-block w-100" src="http://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-bruno-sohnle-BS-17-63073-745E(2).jpg" alt="">
      </div>
    </div>
  </div>
  @endforeach
@endsection