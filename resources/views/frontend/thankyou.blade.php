@extends('frontend.layout.master')

@section('banner')
	<div class="thank-you-section">
       <h1>Thành công</h1>
       <p>Đơn hàng xác nhận đã được gửi</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ route('index') }}" class="button">Trở lại trang chủ</a>
       </div>
   </div>
@endsection
