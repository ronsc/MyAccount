<?php 
	require_once ('lib/DB.php');
	$db=new DB();

	$day = $_GET['Day'];

	$sql = "SELECT * FROM recieve WHERE date = '$day'";
	$db->query($sql);

?>

<div class="panel panel-warning">
  	<div class="panel-heading">
  		<h4>
  			<span class="glyphicon glyphicon-trash"></span>
  			<strong>ลบ</strong>
  		</h4>
  	</div>
  	<div class="panel-body">
  		<div class="alert alert-info">
  			<h3>
	    		<strong><?php echo $_GET['Day']; ?></strong> 
	    	</h3>		
    	</div>

		<form class="form-horizontal" role="form">

    	<?php 
          $i=1;
    			foreach ($db->fetch_array() as $rs) {
        ?>

		<div class="btn-danger btn-xs"></div>  
        <div class="alert alert-danger">
	        <div class="form-group">
	          <label class="col-sm-2 control-label">รายการที่ <?php echo $i++; ?></label>
	          <div class="col-sm-10">
	            <p class="form-control-static"><?php echo $rs['from']; ?></p>
	          </div>
	        </div>

	        <div class="form-group">
	          <label class="col-sm-2 control-label">จำนวนเงิน</label>
	          <div class="col-sm-10">
	            <p class="form-control-static"><?php echo $rs['r_money']; ?>&nbsp;&nbsp;&nbsp;บาท</p>
	          </div>
	        </div>
	    
	        <div class="form-group">
	        	<div class="col-sm-10">
	         	<a href="controller/del_recieve.php?ID=<?php echo $rs['id']; ?>" class="btn btn-danger btn-xs">
		         	<span class="glyphicon glyphicon-remove-circle"></span>
		        	DELETE
	    		</a>
	    		</div>
	        </div>
		</div>

        <?php
    		}
    	?>

      </form>
  	</div>
</div>