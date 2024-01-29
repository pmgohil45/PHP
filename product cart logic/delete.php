<?php
	include"config.php";
	$id = $_REQUEST['id'];
	$delete = "delete from `product` where `pid`='$id'";
	$res = $con -> query($delete);
	header("location:view.php");
?>