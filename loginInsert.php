<?php
include "config.php";
$lunm = $_REQUEST['lunm'];
$lemail = $_REQUEST['lemail'];
$lpassword = $_REQUEST['lpassword'];
$lnumber = $_REQUEST['lnumber'];
$ins = "insert into `login`(`lunm`,`lemail`,`lpassword`,`lnumber`) values ('$lunm','$lemail','$lpassword','$lnumber')";
$res = mysqli_query($con, $ins);
if ($res == TRUE) {
	//header("location:main.php?lemail=lemail");
	//echo"<script>alert('you are successfuly ragister...^_^')";
	echo"<script>alert('you are successfuly ragister...! after you Login, Pleas...!');
		window.location='index.php';</script>";
} else {
	echo "<script>alert('Data Not Inserted...!');
		window.location='index.php';</script>";
}
