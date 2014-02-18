<?php 
	require_once ('../lib/DB.php');
	$db=new DB();

	$id = $_GET['ID'];

	$sql = "DELETE FROM buy WHERE id = '$id'";
	$db->query($sql);
?>

<script>
	alert('DELETE SUCCESS !');
	window.location='../index.php?v=ManageBuy';
</script>