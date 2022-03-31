<?php
	include"config.php";

	if (isset($_GET['s4id'])) {
		$s4id = $_GET['s4id'];

		// fetch file to download from database
		$sel = "SELECT * FROM `sub4pdfdownload` WHERE s4id=$s4id";
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