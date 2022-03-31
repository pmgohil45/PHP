<?php

	include"config.php";
	$s4pdf = $_FILES['s4pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s4pdf']);
	echo"</pre>";
*/
if (isset($_POST['submit'])) { // if save button on the form is clicked
	$file_name = $_FILES['s4pdf']['name'];
	$size = $_FILES['s4pdf']['size'];
	$file_type = $_FILES['s4pdf']['type'];
	$file_tmp_name = $_FILES['s4pdf']['tmp_name'];
	$file_path = "downloads/uploadpdf/".$file_name;
	//move_uploaded_file($file_tmp_name,$file_path);
	//die;
	if (move_uploaded_file($file_tmp_name,$file_path)) {
		$s4name = $_REQUEST['s4name'];
		$ins = "insert into `sub4pdfdownload`(`s4name`, `name`, `size`,`s4pdf`) VALUES('$s4name','$file_name','$size','$file_path')";
		$res = mysqli_query($con,$ins);

		if($res == 1)
		{
			//echo"nice";
			header("location:sub4.php");
		}
		else
		{
		echo"<script>alert('PDF not upload, pleas check again...!');
			window.location='sub4.php';</script>";		}
	}
}
?>