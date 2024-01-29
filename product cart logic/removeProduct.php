<?php
	include"config.php";
	$cid = $_REQUEST['cid'];
	$delete = "delete from `cart` where `cid`='$cid'";
	$res = $con -> query($delete);
	header("location:view.php");
?>