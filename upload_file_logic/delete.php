<?php
	include"config.php";
	$id = $_REQUEST['id'];
	$delete = "delete from image where id='$id'";
	$res = mysqli_query($con,$delete);
?>