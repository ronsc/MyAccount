<?php
	require_once ('lib/DB.php');
	$db=new DB();

	$day = $_GET['Day'];
	$sql = "SELECT date FROM buy WHERE id=7";
	$db->query($sql);

	$r = $db->fetch_array();
	echo $r[0]['date'];
	echo "<br>";

	echo date("m",strtotime($r[0]['date']));
?>

<?php echo "Test Git"; ?>

<?php echo "Test Pull Data From Github"; ?>
