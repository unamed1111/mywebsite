<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Xoá</h4>
      </div>
      <div class="modal-body">
        <p>Bạn có thực sự muốn xoá dữ liệu này&hellip;</p>
      </div>
      <div class="modal-footer">
      	<form action="{{$route}}" method="POST">
      		@csrf
      		@method('DELETE')
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Xoá</button>
      	</form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>                
