<?php 
	include "config.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>College Club Admin Panel</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form method="POST" action="loginCheck.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="aunm" id="aunm" placeholder="User Name" required="">
					<input type="password" name="apassword" id="apassword" placeholder="Password" required="">
					<input class="button" type="submit" id="login" name="login" value="Login">
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
