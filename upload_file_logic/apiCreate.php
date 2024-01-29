<?php
	include"config.php";
	$select = "select * from image";
	$res = mysqli_query($con,$select);
	while($row = mysqli_fetch_assoc($res))
	{
		$arr[] = $row;
	}
	echo "<pre>";
	json_decode(print_r($arr));
?>