        <button id="popup" class="feedback-button" onclick="toggle_visibility()">Feedback</button>
		<script src="_include/js/feedback.js"></script>
		<div class="clear"></div>

    	<div id="feedback-main" class="col-md-12">
	  	<div id="feedback-div">	
            
			<form method="POST" class="form-horizontal" action="{{ route('feedbacks') }}">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">FEEDBACK</div>
                        <div class="panel-body">
                        	<div class="form-group">
                                <div class="col-md-12"><strong>HỌ TÊN:</strong></div>
                                <div class="col-md-12">
                                    <input id="username" class="form-control" name="username" required>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>EMAIL:</strong></div>
                                <div class="col-md-12">
                                    <input id="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>NỘI DUNG:</strong></div>
                                <div class="col-md-12">
                                    <textarea name="content" type="content" id="content" class="form-control" rows="4" required ></textarea>
                                </div>
                            </div>                                                                      
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix" style="float: right;">GỬI</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
		</div>