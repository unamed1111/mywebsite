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
        Customer page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Customer</h3>
              <a class="btn btn-success pull-right" href="{{route('customers.create')}}">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name(s)</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php $stt = 1; ?>
                @foreach($customers as $customer)
                <tr>
                  <td>{{ $stt++ }}</td>
                  <td>{{ $customer->customer_name}}</td>
                  <td>{{ $customer->email}}</td>
                  <td>{{ $customer->phone}}</td>
                  <td>{{ $customer->address}}</td>
                  <td style="width: 25%">
                    <a class="btn btn-primary" href="{{route('customers.show',$customer->id)}}"><i class="fa fa-eye"></i> Edit</a>
                    <a class="btn btn-warning" href="{{route('customers.edit',$customer->id)}}"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                @include('admin.elements.modal-delete',['route'=> route('customers.destroy',$customer->id)])
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