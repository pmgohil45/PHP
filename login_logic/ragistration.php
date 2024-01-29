<!DOCTYPE html>
<head>
	<title>Ragistration page</title>
</head>
<body>
<center>
<form method="post" action="insert.php">
<table>
<tr>
	<h1> Ragistration Form</h1>
</tr>
<tr>
	<th>Name : </th>
	<td><input type="text" id="name" name="name"></td>
</tr><br>
<tr>
	<th>E-mail : </th>
	<td><input type="email" id="email" name="email"></td>
<tr><br>
<tr>
	<th>Password : </th>
	<td><input type="password" id="password" name="password"></td>
</tr>
<tr>
	<th><input type="submit" id="send" name="send" value="Send"></th>
	<th><input type="reset" id="clear" name="clear" value="Clear"></th>
</tr>
</table>
</form>
</center>
</body>
</html>