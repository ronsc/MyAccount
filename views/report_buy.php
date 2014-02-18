<?php 
	require_once ('lib/DB.php');
  require_once ('lib/Account.php');

  $AC=new Account();

	$db=new DB();
	$db1=new DB();

	$sql = "SELECT *,COUNT(list) AS Clist, SUM(b_money) AS Smoney FROM buy GROUP BY DAY(date) ORDER BY date DESC";
	$db->query($sql);

	$Num_Rows = $db->num_rows();
  	$Per_Page = 10;   // Per Page

  	$Page = $_GET["Page"];
  	if(!$_GET["Page"]){
    	$Page=1;
  	}	

  	$Prev_Page = $Page-1;
  	$Next_Page = $Page+1;

  	$Page_Start = (($Per_Page*$Page)-$Per_Page);
  	if($Num_Rows<=$Per_Page){
    	$Num_Pages =1;
  	}else if(($Num_Rows % $Per_Page)==0){
    	$Num_Pages =($Num_Rows/$Per_Page) ;
  	}else{
    	$Num_Pages =($Num_Rows/$Per_Page)+1;
    	$Num_Pages = (int)$Num_Pages;
  	}

  	$sql .= " LIMIT $Page_Start , $Per_Page";
  	$db->query($sql);
?>

<div class="panel panel-danger">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-stats"></span>
  			<strong>รายการใช้จ่ายเงิน</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
		<!-- TOTAL -->
      	<div style="font-size: 25px">
      		<?php 
	            $db2 = new DB();
	            $sql = "SELECT sum(b_money) as total FROM buy";
				$db2->query($sql);

				foreach($db2->fetch_array() as $rs){
					$total = $rs['total'];
				}
			?>
        	ยอดรวม : <span class="label label-danger"><?php echo $AC->putComma($total); ?></span> บาท
      	</div>
      	</br>
      	<div class="btn-danger btn-xs"></div> 
      	<!-- END TOTAL -->

      	<!-- PAGINATION -->
      	<div style="text-align: right; font-size: 20px">
        	<ul class="pagination">
          		<li class="active">
            	<span>ทั้งหมด <?php echo $Num_Rows;?> รายการ</span>
          		</li>
          	<li><span> : </span></li>
        	<?php
          		if($Prev_Page){
            		echo "<li><a href='$_SERVER[SCRIPT_NAME]?v=ReportBuy&Page=$Prev_Page'>
            		<span class='glyphicon glyphicon-chevron-left'></span></a></li>";
          		}else{
            		echo "<li class='disabled'><a href='#'>
            		<span class='glyphicon glyphicon-chevron-left'></span></a></li>";
          		}

          		for($i=1; $i<=$Num_Pages; $i++){
            		if($i != $Page){
              			echo "<li><a href='$_SERVER[SCRIPT_NAME]?v=ReportBuy&Page=$i'>$i</a></li>";
            		}else{
              			echo "<li class='active'><a href='#'>$i</a></li>";
            		}
          		}

          		if($Page!=$Num_Pages){
            		echo "<li><a href='$_SERVER[SCRIPT_NAME]?v=ReportBuy&Page=$Next_Page'>
            		<span class='glyphicon glyphicon-chevron-right'></span></a></li>";
          		}else{
            		echo "<li class='disabled'><a href='#'>
            		<span class='glyphicon glyphicon-chevron-right'></span></a></li>";
          		}
        	?>
        </ul>
      </div>
      <!-- END PAGINATION -->

  		<?php 
  			if($db->fetch_array()){ 
  		?>
  		<table class="table table-hover">
  			<thead>
  				<tr class="active">
  					<th width="150px"><div align="center">DATE</div></th>
  					<th>LIST</th>
  					<th width="150px"><div align="center">MONEY</div></th>
  				</tr>
  			</thead>
  			<tbody>
	  		<?php
	  			$count = 0;
	  			foreach ($db->fetch_array() as $rs) {
	  			$count++;
	  		?>
	  			<tr>
	  				<td>
	  					<div align="center">
	  						<?php echo $rs['date']; ?>
	  					</div>
	  				</td>
	  				<td>
	  					<a href="index.php?v=DayDetail&Day=<?php echo $rs['date']; ?>&sum=<?php echo $rs['Smoney']; ?>" 
	  						class="btn btn-primary btn-sm">
	  						<span class="glyphicon glyphicon-eye-open"></span>
	  					</a>
	  					&nbsp;
	  					<span class="label label-info">
	  						<?php echo $rs['Clist']; ?>&nbsp;รายการ
	  					</span>
	  				</td>
	  				<td>
	  					<div align="right">
	  						<?php echo $rs['Smoney']; ?>
	  						&nbsp;&nbsp;BATH.
	  					</div>
	  				</td>
  				</tr>
	  		<?php
	  			}
	  		?>
  			</tbody>
  			<tfoot>
	          <tr class="active">
	            <td colspan="3">
	            	<div align="center" style="font-size: 25px">รวม <?php echo $count; ?> รายการ</div>
	            </td>
	          </tr>
	        </tfoot>
  		</table>
  		<?php 
  			}else{
  				echo "<h3>ไม่พบข้อมูลใน ฐานข้อมูล</h3>";
  			} 
  		?>
  	</div>
</div>