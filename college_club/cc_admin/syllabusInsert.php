<?php 
	include "config.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">
  
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
				<form method="POST" action="syllabusInsertData.php" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true" style="font-family:Century Schoolbook;">Insert</label>
					<input type="text" name="sname" id="sname" placeholder="PDF Name" required="">
					<input type="file" name="spdf" id="spdf" required="">
					<input class="button" type="submit" id="submit" name="submit" value="Submit">
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>