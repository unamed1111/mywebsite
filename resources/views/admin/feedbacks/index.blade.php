@extends('admin.layouts.master')

@section('css')
      <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FeedBack
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">FeedBack</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">FeedBack</h3>
              {{-- <a class="btn btn-success pull-right" href="{{route('feedbacks.create')}}">Add</a> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tên khách hàng</th>
                  <th>Email</th>
                  <th>Trạng thái</th>
                  <th>Ngày gửi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($feedbacks as $feedback)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $feedback->username}}</td>
                  <td>{{ $feedback->email}}</td>
                  <td>{{ FBstatus[$feedback->status]}}</td>
                  <td>{{ $feedback->created_at}}</td>
                  <td style="width: 25%">
                    <a class="btn btn-primary" href="{{route('feedbacks.show',$feedback->id)}}"><i class="fa fa-eye"></i> Show</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('feedbacks.destroy',$feedback->id)])
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            {{-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div> --}}
          </div>
    </section>
    </div>
@endsection

@section('javascript')
      <!-- DataTables -->
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset( '/for_admin_page/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
@endsection