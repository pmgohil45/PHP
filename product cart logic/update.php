<?php
	include"config.php";
	$id = $_REQUEST['id'];
	$sel = "select * from `form` where `id`='$id'";
	$res = $con -> query($sel);
	$row = $res -> fetch_assoc();
?>
<DOCTYPE! html>
<head>
	<title>	Update </title>
</head>
<body bgcolor="cyan">
<div align="center">
<h1>Updation Form</h1>
<form method="post" action="updateDetail.php?id=<?php echo $id; ?>">
<table>
	<tr>
		<td>Name : 
		<td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" >
	</tr>
	
	<tr>
		<td>E-mail :
		<td><input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
	</tr>
	
	<tr>
		<td>Password ; </td>
		<td><input type="password" name="password" id="password" value="<?php echo $row['name']; ?>password"></td>
	</tr>
	
	<tr>
		<td>Contact : 
		<td><input type="number" name="number" id="number" value="<?php echo $row['number']; ?>">
	</tr>	

	<tr>
		<td>Birth Date :
		<td><input  type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" >
		
	<tr>
		<td>City : 
		<td><select name="city" id="name" value="<?php echo $row['city']; ?>">
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
		<td>Gender : 
		<?php
			if($row['gender'] == 'male')
			{
		?>
				<td><input type="radio" name="gender" id="gender" value="male" checked> Male
				<input type="radio" name="gender" id="gender" value="female" > Female
		<?php
			}else{
		?>
				<td><input type="radio" name="gender" id="gender" value="male"> Male
				<input type="radio" name="gender" id="gender" value="female" checked> Female
		<?php
			}
		?>
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