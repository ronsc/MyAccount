<?php 
	require_once ('lib/Control.php');
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$db1=new DB();
	$db2=new DB();
	$db3=new DB();
	$db4=new DB();

	$sql = "SELECT SUM(r_money) AS TotalR FROM recieve";
	$db1->query($sql);
	$R_balance=$db1->fetch_array();
	
	$today = date("Y-m-d");
	$sql .= " WHERE date = '$today'";
	$db3->query($sql);
	$today_recieve = $db3->fetch_array();

	$sql = "SELECT SUM(b_money) AS TotalB FROM buy";
	$db2->query($sql);
	$B_balance=$db2->fetch_array();

	$sql .= " WHERE date = '$today'";
	$db4->query($sql);
	$today_buy = $db4->fetch_array();
	
	$balance=(int)($R_balance[0]['TotalR'])-(int)($B_balance[0]['TotalB']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>โปรแกรมบันทึก รายรับ-รายจ่าย</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<!-- TOP -->
<div class="nav navbar-inverse" style="color: #f9f8f7; padding: 10px; text-align: left">
	<div class="container">
		<!-- TITLE -->
		<div class="pull-left">
			<h1>
			<span class="glyphicon glyphicon-calendar"></span>
			&nbsp;MY ACCOUNT<br><small>โปรแกรมบันทึก รายรับ-รายจ่าย</small></h1>
		</div>
		<!-- END TITLE -->

		<!-- BALANCE -->
		<div style="margin-top: 20px; text-align: right" class="pull-right">
		
			<?php if($balance >= 0){ ?>
			<span class="label label-success" style="font-size: 30px;">
				คงเหลือ <?php echo Account::putComma($balance).".-"; ?> บาท
			</span>
			<?php }else{ ?>
			<span class="label label-danger">
				คงเหลือ <?php echo Account::putComma($balance).".-"; ?> บาท
			</span>
			<?php } ?>
		</br></br>
			<span class="label" style="font-size: 20px">
				<?php 
					echo Account::convertDay($today)." ";
					echo date("d")." ";
					echo Account::convertShortMonth($today)." ";
					echo substr((date("Y")+543), -2); 
				?>
				&nbsp;|
				<span class="label label-primary">
					<span class="glyphicon glyphicon-plus-sign"></span> 
					&nbsp;<?php echo $today_recieve[0]['TotalR']; ?>.-
				</span>
				&nbsp;|
				<span class="label label-danger">
					<span class="glyphicon glyphicon-minus-sign"></span>
					&nbsp;<?php echo $today_buy[0]['TotalB']; ?>.-
				</span>
			</span>
		</div>
		<!-- END BALANCE -->

	</div>
</div>
<div class="btn-primary" style="padding: 5px;"></div> 
<!-- END TOP -->

<div class="container" style="margin-top: 25px">
	<div class="row">
		<!-- Menu -->
  		<div class="col-md-3">
  			<?php Control::viewMenu(); ?>
  		</div>
  		<!-- Content -->
  		<div class="col-md-9">
			<?php Control::content($_GET['v']); ?>
  		</div>
  	</div>
</div>

<!-- Footer -->
<div class="btn-info" style="padding: 5px;"></div> 
<div class="nav navbar-inverse" style="color: #f9f8f7; padding: 10px; text-align: center; font-size: 17px">
	<div>Copyright &copy; <?php echo date('Y'); ?> BY RONSC.</div>
	<div>พัฒนาโดย PHP + Bootstrap 3 + MySQL Database</div>
	<div><strong>ติดต่อสอบถาม</strong></div>
	<div>EMAIL: fdroncpe17@gmail.com, FACEBOOK: www.facebook.com/fd.ron</div>
</div>

</body>
</html>
