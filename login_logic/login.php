<?php
require "config.php";
$id = $_REQUEST['id'];
/*$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
*/
$select = "select `name`,`email`,`password` from login where id=$id";
$res = mysqli_query($con,$select);
while($row = mysqli_fetch_array($res))
{
	$count = mysqli_num_rows($res);	
	if($count > 0)
	{
		session_start();
		$_SESSION['id']=$row['id'];
		//header("location:home.php");
	}
	else
	{
		echo"<script> alert('Wrong Username & Password.'); </script>";
	}
}
?>
<!DOCTYPE html>
<head>
	<title>Login page</title>
</head>
<body>
<center>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table>
<tr>
	<h1> Login Form</h1>
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