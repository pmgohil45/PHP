<?php 
	include "config.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
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
	<div class="main" style="width: 650px; height:200vh; margin:10vh;">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
				<form method="POST" action="dataDbDelete.php">
					<label for="chk" aria-hidden="true" align="center" style="font-family:Century Schoolbook;">Login Data</label>
					<input type="number" name="lid" id="lid" placeholder="I'd Number" required="">
					<input class="button" type="submit" id="submit" name="submit" value="Delete">
				</form>
				
				<?php
					$sel = "select * from `login`";
					$res = mysqli_query($con,$sel);
				?>
			
			<table align="center" style="color:#9370DB;">
					<tr style="color:#fff;">
						<th style="padding:1vh">I'd</th>
						<th style="padding:1vh">User Name</th>
						<th style="padding:1vh">E-mail</th>
						<th style="padding:1vh">Password</th>
						<th style="padding:1vh">Number</th>
					</tr>
					<?php
						while($row = mysqli_fetch_assoc($res))
						{
							$lid = $row['lid'];
					?>
						<tr>
							<td style="padding:1vh"><?php echo $row['lid']; ?></td>
							<td style="padding:1vh"><?php echo $row['lunm']; ?></td>
							<td style="padding:1vh"><?php echo $row['lemail']; ?></td>
							<td style="padding:1vh"><?php echo $row['lpassword']; ?></td>
							<td style="padding:1vh"><?php echo $row['lnumber']; ?></td>
						</tr>
					<?php
						}
					?>
			</table>
		</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
