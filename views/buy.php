<div class="panel panel-default">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-calendar"></span>
  			<strong>บันทึกรายจ่ายประจำวัน</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
  		<form class="form-horizontal" action="controller/buy.php" method="POST" entype="multipart/data">
  			<div align="right">
	  			<button type="submit" class="btn btn-success btn-lg">
	  				<span class="glyphicon glyphicon-floppy-disk"></span>
	  				&nbsp;Save
	  			</button>
	  			<hr></hr>
  			</div>
  			
	  		<div class="alert alert-info">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="date">DATE</label>
		    		<div class="col-xs-4">
		    			<?php $today = getdate(); ?>
		    			<input value="<?php echo date("Y-m-d"); ?>" name="date" placeholder="ปปปป-ดด-วว" type="text" class="form-control input-lg"/>
		  			</div>
	  			</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="list">LIST</label>
		  			<div class="col-xs-6">
		    			<input name="list" type="text" class="form-control input-lg"/>
		  			</div>
		  		</div>
	  			<div class="form-group">
	  				<label class="col-sm-2 control-label" for="money">MONEY</label>
	  				<div class="col-xs-2">
	    				<input name="money" type="text" class="form-control input-lg"/>
	    			</div>
	    			<label class="control-label" for="money">BATH.</label>
	  			</div>
	  			<span id="mySpan"></span>
	  		</div>
  		</form>
  	</div>
</div>