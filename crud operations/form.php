<?php
	require "config.php";
?>
<DOCTYPE! html>
<head>
	<title>	Form </title>
</head>
<body bgcolor="cyan">
<div align="center">
<h1>Information Form</h1>
<form method="post" action="insert.php">
<table>
	<tr>
		<td>Name : 
		<td><input type="text" name="name" id="name" value="" required>
	</tr>
	
	<tr>
		<td>E-mail :
		<td><input type="email" name="email" id="email" value="">
	</tr>

	<tr>
		<td>Contact : 
		<td><input type="number" name="number" id="number" value="" required>
	</tr>	

	<tr>
		<td>Birth Date :
		<td><input  type="date" name="dob" id="dob" value="" required>
	<tr>
		<td>Gender : 
		<td><input type="radio" name="gender" id="gender" value="male" required> Male
			<input type="radio" name="gender" id="gender" value="female" required> Female
			<input type="radio" name="gender" id="gender" value="other" required> Other
	</tr>
		
	<tr>
		<td>City : 
		<td><input type="text" name="city" id="city" value="" required>
	</tr>
	
	<tr>
		<td><input type="submit" name="send" id="send" value="Send">
		<td><input type="reset" name="clear" id="clear" value="Clear">
	</tr>
</table>
</form>
</div>
</body>
</html>