<?php
	include"config.php";

	$sel = "SELECT * FROM `sub3pdfdownload`";
	$res = mysqli_query($con, $sel);

	$files = mysqli_fetch_all($res, MYSQLI_ASSOC);


	if (isset($_GET['s3id'])) {
		$s3id = $_GET['s3id'];

		// fetch file to download from database
		$sel = "SELECT * FROM `sub3pdfdownload` WHERE s3id=$s3id";
		$res = mysqli_query($con, $sel);

		$file = mysqli_fetch_assoc($res);
		$filepath = 'uploadpdf/' . $file['name'];

		if (file_exists($filepath)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($filepath));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('uploadpdf/' . $file['name']));
			readfile('uploadpdf/' . $file['name']);

			// Now update downloads count
			//$newCount = $file['downloads'] + 1;
			//$updateQuery = "UPDATE `pdfs` SET downloads=$newCount WHERE id=$id";
			//mysqli_query($conn, $updateQuery);
			exit;
			//echo"yes";
		}else{echo"no";}
	}
?>