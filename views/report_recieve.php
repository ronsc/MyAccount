<?php 
	require_once ('lib/DB.php');
  require_once ('lib/Account.php');

  $AC=new Account();

	$db=new DB();

	$sql = "SELECT * FROM recieve ORDER BY date DESC";
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

<div class="panel panel-info">
  	<div class="panel-heading">
  		<h3>
  			<span class="glyphicon glyphicon-stats"></span>
  			<strong>รายงาน : รายรับ</strong>
  		</h3>
  	</div>
  	<div class="panel-body">
      <!-- TOTAL -->
      <div style="font-size: 25px">
        <?php 
          $db2 = new DB();
          $sql = "SELECT sum(r_money) as total FROM recieve";
          $db2->query($sql);

          foreach($db2->fetch_array() as $rs){
            $total = $rs['total'];
          }
        ?>
        ยอดรวม : <span class="label label-primary"><?php echo $AC->putComma($total); ?></span> บาท
      </div>
      </br>
      <div class="btn-danger btn-xs"></div> 
      <!-- END TOTAL -->

      <!-- PAGINATION -->
      <div style="text-align: right; font-size: 20px">
        <ul class="pagination">
          <li class="active">
            <span>
            ทั้งหมด <?php echo $Num_Rows;?> รายการ
            </span>
          </li>
          <li><span> : </span></li>
        <?php
          if($Prev_Page){
            echo "<li><a href='$_SERVER[SCRIPT_NAME]?v=ReportRecieve&Page=$Prev_Page'>
            <span class='glyphicon glyphicon-chevron-left'></span></a></li>";
          }else{
            echo "<li class='disabled'><a href='#'>
            <span class='glyphicon glyphicon-chevron-left'></span></a></li>";
          }

          for($i=1; $i<=$Num_Pages; $i++){
            if($i != $Page){
              echo "<li><a href='$_SERVER[SCRIPT_NAME]?v=ReportRecieve&Page=$i'>$i</a></li>";
            }else{
              echo "<li class='active'><a href='#'>$i</a></li>";
            }
          }
          if($Page!=$Num_Pages){
            echo "<li><a href='$_SERVER[SCRIPT_NAME]?v=ReportRecieve&Page=$Next_Page'>
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
  					<th width="150px">DATE</th>
  					<th>FROM</th>
  					<th width="100px">MONEY</th>
  				</tr>
  			</thead>
  			<tbody>
	  		<?php
          $count = 0;
	  			foreach ($db->fetch_array() as $rs) {
          $count++;
	  		?>
	  			<tr>
	  				<td><?php echo $rs['date']; ?></td>
	  				<td><?php echo $rs['get']; ?></td>
	  				<td>
              <div align="center">
                <?php echo $rs['r_money']; ?>
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