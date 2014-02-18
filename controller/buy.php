<?php 
	require_once ('../lib/DB.php');

	$db=new DB();

	$sql = "INSERT INTO buy VALUES (NULL, '".$_POST['date']."', '".$_POST['list']."', '".$_POST['money']."', NULL)";
	$db->query($sql);
?>

<script>
	window.location = '../index.php?v=CreateBuy';
</script>
