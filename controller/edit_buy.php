<?php
	require_once ('../lib/DB.php');
	$db=new DB();

	for($i=0; $i<COUNT($_POST['money']); $i++){

		$L = $_POST['list'][$i];
		$MN = $_POST['money'][$i];
		$ID = $_POST['id'][$i];

		$db->query("UPDATE buy SET list = '$L', b_money = '$MN' WHERE id = '$ID'");
	}
?>

<script>
	window.location='../index.php?v=ManageBuy';
</script>