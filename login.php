<?php 
	include "config.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>College Club</title>
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
	<div class="main" style="padding-bottom:30px;">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="loginCheck.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="lemail" id="lemail" placeholder="Email" required="">
					<input type="password" name="lpassword" id="lpassword" placeholder="Password" required="">
					<input class="button" type="submit" id="login" name="login" value="Login">
				</form>
			</div>
			
			<div class="login" style="padding-bottom:40px;">
				<form method="POST" action="loginInsert.php">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="lunm" id="lunm"  placeholder="User name" required="">
					<input type="email" name="lemail" id="lemail" placeholder="Email" required="">
					<input type="password" name="lpassword" id="lpassword" placeholder="Password" required="">
					<input type="number" name="lnumber" id="lnumber" placeholder="Number" required="">
					<input type="submit" class="button" id="signup"name="signup" value="Sign up">
				</form>
			</div>

	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
