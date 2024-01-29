<?php
include "config.php";
$lunm = $_REQUEST['lunm'];
$lemail = $_REQUEST['lemail'];
$lpassword = $_REQUEST['lpassword'];
$lnumber = $_REQUEST['lnumber'];
$ins = "insert into `login`(`lunm`,`lemail`,`lpassword`,`lnumber`) values ('$lunm','$lemail','$lpassword','$lnumber')";
$res = mysqli_query($con, $ins);
if ($res == TRUE) {
	header("location:main.php");
} else {
	echo "<script>alert('Data Not Inserted...!');
		window.location='index.php';</script>";
}
