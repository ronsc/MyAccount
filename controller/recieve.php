<?php 
	require_once ('../lib/DB.php');

	$db=new DB();

	$sql = "INSERT INTO recieve VALUES (NULL, '".$_POST['date']."', '".$_POST['from']."', '".$_POST['money']."', NULL)";
	$db->query($sql);
?>

<script>
	window.location = '../index.php?v=CreateRecieve';
</script>