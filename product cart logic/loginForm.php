<?php
	include"config.php";
?>
<DOCTYPE! html>
<head>
	<title>	Login </title>
</head>
<body bgcolor="#7CB9E8">
<div align="center">
<h1>Login Form</h1>
<form method="post" action="login.php">
<table>
	<tr>
		<td>E-mail :
		<td><input type="email" name="email" id="email" value="">
	</tr>
	<tr>
		<td>Password ; </td>
		<td><input type="password" name="password" id="password" value=""></td>
	</tr>
<!--	<tr>
		<td>Contact : 
		<td><input type="number" name="number" id="number" value="" >
	</tr>
	<tr>
		<td>Birth Date :
		<td><input  type="date" name="dob" id="dob" value="" >
	</tr>
-->	<tr>
		<td><input type="submit" name="login" id="login" value="Login">
	</tr>
</table>
</form>
</div>
</body>
</html>