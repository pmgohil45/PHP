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
				<form method="POST" action="syllabusDeleteData.php">
					<label for="chk" aria-hidden="true" style="font-family:Century Schoolbook;">Delete</label>
					<input type="number" name="sid" id="sid" placeholder="I'd Number" required="">
					<input class="button" type="submit" id="submit" name="submit" value="Submit">
				</form>
				
				<?php
					$sel = "select `sid`,`sname` from `syllabus`";
					$res = mysqli_query($con,$sel);
				?>
			
		<table align="center" style="color:#9370DB;">
					<tr style="color:#fff;">
						<th style="padding:1vh">I'd</th>
						<th style="padding:1vh">Name</th>
					</tr>
					<?php
						while($row = mysqli_fetch_assoc($res))
						{
							$sid = $row['sid'];
					?>
						<tr>
							<td style="padding:1vh"><?php echo $row['sid']; ?></td>
							<td style="padding:1vh"><?php echo $row['sname']; ?></td>
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