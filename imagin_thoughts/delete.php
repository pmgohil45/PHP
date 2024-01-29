<?php
	include"config.php";
	$id = $_REQUEST['id'];
	$delete = "delete from thoughts where id=$id";
	$res = $con -> query($delete);
	if($res === TRUE){
	  echo ("<script LANGUAGE='JavaScript'>
		window.alert('Record deleted successfully');
		window.location.href='index.php';
		</script>");
	}else{
	  echo "Error deleting record: ".$conn->error;
	}
?>