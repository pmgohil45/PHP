<?php

	include"config.php";
	$s2pdf = $_FILES['s2pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s2pdf']);
	echo"</pre>";
*/

	
if (isset($_POST['submit'])) { // if save button on the form is clicked
	$file_name = $_FILES['s2pdf']['name'];
	$size = $_FILES['s2pdf']['size'];
	$file_type = $_FILES['s2pdf']['type'];
	$file_tmp_name = $_FILES['s2pdf']['tmp_name'];
	$file_path = "downloads/uploadpdf/".$file_name;
	//move_uploaded_file($file_tmp_name,$file_path);
	//die;
	if (move_uploaded_file($file_tmp_name,$file_path)) {
		$s2name = $_REQUEST['s2name'];
		$ins = "insert into `sub2pdfdownload`(`s2name`, `name`, `size`,`s2pdf`) VALUES('$s2name','$file_name','$size','$file_path')";
		$res = mysqli_query($con,$ins);

		if($res == 1)
		{
			//echo"nice";
			header("location:sub2.php");
		}
		else
		{
		echo"<script>alert('PDF not upload, pleas check again...!');
			window.location='sub2Insert.php';</script>";
		}
	}
}
?>