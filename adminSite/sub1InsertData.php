<?php

	include"config.php";
	$s1pdf = $_FILES['s1pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s1pdf']);
	echo"</pre>";
*/
if (isset($_POST['submit'])) { // if save button on the form is clicked
	$file_name = $_FILES['s1pdf']['name'];
	$size = $_FILES['s1pdf']['size'];
	$file_type = $_FILES['s1pdf']['type'];
	$file_tmp_name = $_FILES['s1pdf']['tmp_name'];
	$file_path = "downloads/uploadpdf/".$file_name;
	//move_uploaded_file($file_tmp_name,$file_path);
	//die;
	if (move_uploaded_file($file_tmp_name,$file_path)) {
		$s1name = $_REQUEST['s1name'];
		$ins = "insert into `sub1pdfdownload`(`s1name`, `name`, `size`,`s1pdf`) VALUES('$s1name','$file_name','$size','$file_path')";
		$res = mysqli_query($con,$ins);

		if($res == 1)
		{
			//echo"nice";
			header("location:sub1.php");
		}
		else
		{
		echo"<script>alert('PDF not upload, pleas check again...!');
			window.location='sub1Insert.php';</script>";		}
	}
}
?>