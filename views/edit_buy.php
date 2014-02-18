<?php 
	require_once ('lib/DB.php');
	$db=new DB();

	$day = $_GET['Day'];

	$sql = "SELECT * FROM buy WHERE date = '$day'";
	$db->query($sql);

?>

<div class="panel panel-warning">
  	<div class="panel-heading">
  		<h4>
  			<span class="glyphicon glyphicon-edit"></span>
  			<strong>แก้ไข</strong>
  		</h4>
  	</div>
  	<div class="panel-body">
    	<h3><?php echo $_GET['Day']; ?></h3>
      	<hr></hr>
      <form entype="multipart/data" class="form-horizontal" role="form" action="controller/edit_buy.php" method="POST">
    		<?php 
          $i=1;
    			foreach ($db->fetch_array() as $rs) {
        ?>

        <input type="hidden" name="id[]" value="<?php echo $rs['id']; ?>">

        <div class="form-group">
          <label class="col-sm-2 control-label">รายการที่ <?php echo $i++; ?></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="list[]" 
            value="<?php echo $rs['list']; ?>" />
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword" class="col-sm-2 control-label">จำนวนเงิน</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="money[]" 
            value="<?php echo $rs['b_money']; ?>" />
          </div>
        </div>
        <hr></hr>

        <?php
    			}
    		?>
        <button type="submit" class="btn btn-primary btn-lg">SAVE</button>
      </form>
  	</div>
</div>