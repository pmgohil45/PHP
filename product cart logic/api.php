<?php
	echo"<title>"."^_^ API Creating ^_^"."</title>";
	include"config.php";
	$id = $_REQUEST['id'];
	$select = "select * from `product` where `id`='$id'";
	$res = $con -> query($select);
	$count = $res -> num_rows;
	while($row = $res -> fetch_assoc())
	{
		$blankArray[] = $row;
	}
	echo"<pre>";
	print_r($blankArray);
?>