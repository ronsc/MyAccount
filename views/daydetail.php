<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db=new DB();

	$day = $_GET['Day'];
	$sql = "SELECT * FROM buy WHERE date = '$day' ORDER BY b_money DESC";
	$db->query($sql);
?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div style="font-size: 35px;">
			<div class="alert alert-info">
				<?php
					echo "วัน"; 
					echo $AC->convertDay($day); 
					echo "ที่ ";
					echo (int)date("d", strtotime($day));
					echo " ";
					echo $AC->convertMonth($day); 
					echo " ";
					echo date("Y", strtotime($day))+543;
				?>
				<div align="right">
					รวม <span class="label label-primary"><?php echo $_GET['sum']; ?></span> บาท.
				</div>
			</div>
		</div>
		<div class="btn-primary" style="padding: 2px;"></div> 
		<br>

		<?php foreach ($db->fetch_array() as $rs) { ?>
		<blockquote class="btn-default">
			<div style="font-size: 25px">
		  		<p style="font-size: 25px"><strong><?php echo $rs['list']; ?></strong></p>
		  		<footer><?php echo $rs['b_money']; ?> บาท.</footer>
			</div>

		</blockquote>
		<?php } ?>

	</div>
</div>