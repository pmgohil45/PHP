<?php
include"config.php";

$thoughts = $_REQUEST['txtThoughts'];
$dt = date('d-m-y');
if(!empty($thoughts)){
	$insert = "insert into `thoughts`(`thoughts_text`,`thoughts_time`) values('$thoughts','$dt')";
	$res = $con -> query($insert);
	if($res === true){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Record inserted successfully');
			window.location.href='index.php';
			</script>");
		//header("location: apiCreate.php");
	}else{
		echo"not inserted";
	}
}else{
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Please enter a Thoughts..!');
		window.location.href='index.php';
		</script>");
}
?>