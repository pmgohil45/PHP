<?php
	include"config.php";
?>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>
<table align="center" border="1vh solid">
<form method="post" action="insert.php" enctype="multipart/form-data">
<tr>
	<th>Name : </th>
	<td><input type="text" id="name" name="name"></td>
</tr>
<tr>
	<th>Upload Image : </th>
	<td><input type="file" id="uploadImg" name="uploadImg"></td>
</tr>
<tr>
	<th align="right"><input type="submit" id="send" name="send" value="Send"></th>
	<th align="left"><input type="reset" id="clear" name="clear" value="Clear"></th>
</tr>
</form>
</table>
</body>
</html>