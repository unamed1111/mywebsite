<!DOCTYPE html>
<html>
  @include('admin.layouts.head')
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('admin.layouts.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('admin.layouts.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  {{-- @include('admin.layouts.controlsidebar') --}}
  <!-- /.control-sidebar -->
  
</div>
<!-- ./wrapper -->

  @include('admin.layouts.script')
</body>
</html>
