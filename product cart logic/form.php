<?php
	include"config.php";
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
		<td><input type="text" name="name" id="name" value="" >
	</tr>
	
	<tr>
		<td>E-mail :
		<td><input type="email" name="email" id="email" value="">
	</tr>
	
	<tr>
		<td>Password ; </td>
		<td><input type="password" name="password" id="password" value=""></td>
	</tr>
	
	<tr>
		<td>Contact : 
		<td><input type="number" name="number" id="number" value="" >
	</tr>	

	<tr>
		<td>Birth Date :
		<td><input  type="date" name="dob" id="dob" value="" >
	<tr>
		<td>Gender : 
		<td><input type="radio" name="gender" id="gender" value="male" > Male
			<input type="radio" name="gender" id="gender" value="female" > Female
	</tr>
		
	<tr>
		<td>City : 
		<td><select name="city" id="name" value="" >
				<option>Rajkot</option>
				<option>Jamnagar</option>
				<option>Jetpur</option>
				<option>Surat</option>
				<option selected>Select</option>
				<option>Amdabad</option>
			</select>				
		</td>
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