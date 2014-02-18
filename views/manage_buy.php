<?php 
	require_once ('lib/DB.php');
	$db=new DB();

  $sql = "SELECT *,COUNT(date) AS Clist, SUM(b_money) AS Smoney FROM buy GROUP BY DATE(date) ORDER BY date DESC";
  $db->query($sql);
  
?>

<div class="panel panel-warning">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-edit"></span>
  			<strong>แก้ไข / ลบ รายจ่าย</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
  		<?php 
  			if($db->fetch_array()){ 
  		?>
  		<table class="table table-hover">
  			<thead>
  				<tr class="active">
  					<th width="150px">DATE</th>
            <th>FROM/LIST</th>
  					<th width="100px">MONEY</th>
  					<th width="50px">แก้ไข</th>
  					<th width="50px">ลบ</th>
  				</tr>
  			</thead>
  			<tbody>
	  		<?php
	  			foreach ($db->fetch_array() as $rs) {
	  		?>
	  			<tr>
	  				<td><?php echo $rs['date']; ?></td>
            <td>
                <strong>
                  ทั้งหมด <span class="badge">
                  <?php echo $rs['Clist']; ?>  
                  </span>&nbsp;รายการ
                </strong>
            </td>
	  				<td><?php echo $rs['Smoney']; ?></td>
	  				<td>
	  					<div align="center">
	  					<a 
                href="index.php?v=EditBuy&Day=<?php echo $rs['date']; ?>" 
                class="btn btn-warning btn-xs">
	  					<span class="glyphicon glyphicon-edit"></span>
	  					</a>
	  					</div>
	  				</td>
	  				<td>
	  					<div align="center">
	  					<a href="index.php?v=DelBuy&Day=<?php echo $rs['date']; ?>" class="btn btn-danger btn-xs">
	  					<span class="glyphicon glyphicon-trash"></span>
	  					</a>
	  					</div>
	  				</td>
  				</tr>
	  		<?php
	  			}
	  		?>
  			</tbody>
  		</table>
  		<?php 
  			}else{
  				echo "<h3>ไม่พบข้อมูลใน ฐานข้อมูล</h3>";
  			} 
  		?>
  	</div>
</div>