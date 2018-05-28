@extends('frontend.layout.nav1')

@section('leftbox')
			<div class="box1">
                <div class="leftTexttitle" style="color: black;"><span class="fa fa-plus-square"></span>hỗ trợ khách hàng</div>
                	<?php $stt = 1; ?>
                  	@foreach($supports as $support)
                  	<div class="leftText"><span></span><a href="{{ route('supports',$support->id) }}" class="boldText" style="color: black;">{{ $stt++ }}. {{$support->title}}</a></div>
                  	@endforeach
                <div class="clear"></div>
            </div>
@endsection

@section('content')
			<div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$spcontent->title}}</h3>
                </div>
              <!-- /.box-header -->
                <div class="box-body">
                    <div class="panel-body table-responsive">
                        <div class="row">
                            {!! $spcontent->content !!}
                        </div>
                    </div>
                </div>
              <!-- /.box-body -->
            </div>
@endsection