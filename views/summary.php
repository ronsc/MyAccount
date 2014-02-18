<?php
	require_once ('lib/DB.php');
	require_once ('lib/Account.php');

	$AC=new Account();
	$db1=new DB();
	$db2=new DB();

	$sql1 = "SELECT date, SUM(r_money) AS s_recieve FROM recieve GROUP BY MONTH(date)";
	$sql2 = "SELECT date, SUM(b_money) AS s_buy FROM buy GROUP BY MONTH(date)";

	$db1->query($sql1);
	$db2->query($sql2);

	//SUM RECIEVE
	foreach ($db1->fetch_array() as $f1) {
		$balance1 += $f1['s_recieve'];
	}
	//SUM BUY
	foreach ($db2->fetch_array() as $f2) { 
		$balance2 += $f2['s_buy']; 
	}

	//RESULT BALANCE
	$balance = $balance1-$balance2;
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>
  			<span class="glyphicon glyphicon-stats"></span>
  			<strong>สรุป รายรับ-รายจ่าย ต่อเดือน</strong>
  		</h3>
	</div>

	<div class="panel-body">
		<div align="right" class="alert alert-info">
			<h3><strong>
				ยอดเงินคงเหลือปัจจุบัน&nbsp;&nbsp;
				<span class="label label-primary"><?php echo $AC->putComma((string)$balance); ?></span>
				&nbsp;&nbsp;บาท
			</strong></h3>
		</div>
		<table class="table"  align="center">
			<tr class="active">
				<td colspan="2"><h4><strong>รายรับ</strong></h4></td>
			</tr>
			<?php foreach ($db1->fetch_array() as $rs) { ?>
			<tr>
				<td width="600px"><?php echo $AC->convertMonth($rs['date']); ?></td>
				<td width="100px"><?php echo $rs['s_recieve']; $s1 += $rs['s_recieve']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<div align="right">
					<strong>TOTAL</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td><strong><?php echo $AC->putComma((string)$s1); ?></strong></td>
			</tr>

			<tr class="active">
				<td colspan="2"><h4><strong>รายจ่าย</strong></h4></td>
			</tr>
			<?php foreach ($db2->fetch_array() as $rs2) { ?>
			<tr>
				<td><?php echo $AC->convertMonth($rs2['date']); ?></td>
				<td><?php echo $rs2['s_buy']; $s2 += $rs2['s_buy']; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<div align="right">
					<strong>TOTAL</strong>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</td>
				<td>
					<strong><?php echo $AC->putComma((string)$s2); ?></strong></td>
			</tr>


		</table>
	</div>
</div>