<?php

	include"config.php";
	$spdf = $_FILES['spdf'];
/*
	echo"<pre>";
	print_r($_FILES['spdf']);
	echo"</pre>";
*/
if (isset($_POST['submit'])) { // if save button on the form is clicked
	$file_name = $_FILES['spdf']['name'];
	$size = $_FILES['spdf']['size'];
	$file_type = $_FILES['spdf']['type'];
	$file_tmp_name = $_FILES['spdf']['tmp_name'];
	$file_path = "downloads/uploadpdf/".$file_name;
	//move_uploaded_file($file_tmp_name,$file_path);
	//die;
	if (move_uploaded_file($file_tmp_name,$file_path)) {
		$sname = $_REQUEST['sname'];
		$ins = "insert into `syllabus`(`sname`, `name`, `size`,`spdf`) VALUES('$sname','$file_name','$size','$file_path')";
		$res = mysqli_query($con,$ins);

		if($res == 1)
		{
			//echo"nice";
			header("location:syllabus.php");
		}
		else
		{
		echo"<script>alert('PDF not upload, pleas check again...!');
			window.location='syllabus.php';</script>";		}
	}
}
?>