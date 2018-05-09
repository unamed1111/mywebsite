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
        TradeMarks
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">TradeMarks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">TradeMarks</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-active">
                            <tr>
                                <th>Trade Mark</th>
                                <td field-key=''>{{ $trademark->trademark_name ? $trademark->trademark_name : "" }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td field-key=''>{{ $trademark->description ? $trademark->description : "" }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
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