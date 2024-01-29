<?php
	require "config.php";
	$id = $_REQUEST['id'];
	$delete = "delete from prakash where id='$id' ";
	$res = mysqli_query($con,$delete);
	header("location: view.php");
?>