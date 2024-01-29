<?php
	include"config.php";
	session_start();
	$cid = $_REQUEST['id'];
	$insert = "insert into `cart`(`cid`)
				values('$cid')";
	//$cname = $_REQUEST['pname'];
	//$cdiscription = $_REQUEST['pdiscription'];
	//$cprice = $_REQUEST['pprice'];
	/*$insert = "insert into `cart`(`cid`,`cname`,`cdiscription`,`cprice`)
				values('$cid','$cname','$cdiscription','$cprice')";
	*/
	$res = $con -> query($insert);
	if($res == 1)
	{
		echo"yes";
	}
?>