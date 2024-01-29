<?php
	require"config.php";
	$id = $_REQUEST['id'];
	$select = "select * from prakash where id='$id' ";
	$res = mysqli_query($con,$select);
	$row = mysqli_fetch_assoc($res);
?>
<html>
<head>
	<title>	update </title>
</head>
<body bgcolor="#FFCCFF">
<div align="center">
<h1>Update Form</h1>
<form method="post" action="update_detail.php?id=<?php echo $id; ?>">
<table>
	<tr>
		<td>Name : 
		<td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">
	</tr>
	
	<tr>
		<td>E-mail :
		<td><input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
	</tr>

	<tr>
		<td>Contact : 
		<td><input type="number" name="number" id="number" value="<?php echo $row['number']; ?>">
	</tr>	

	<tr>
		<td>Birth Date :
		<td><input  type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>">
	<tr>
		<td>Gender : 
		<!--<td><input type="radio" name="gender" id="gender" value="<?php //echo $row['gender']; ?>"> Male
			<input type="radio" name="gender" id="gender" value="<?php //echo $row['gender']; ?>"> Female
			<input type="radio" name="gender" id="gender" value="<?php //echo $row['gender']; ?>"> Other
		-->
		<td>
			<?php
			if($row['gender'] == 'male')
			{
				if($row['gender'])
			?>
				<input type="radio" name="gender" id="gender" value="Male" checked> Male
				<input type="radio" name="gender" id="gender" value="Female"> Female
				<input type="radio" name="gender" id="gender" value="Other"> Other
			<?php
			}
			else if($row['gender'] == 'female')
			{
			?>
				<input type="radio" name="gender" id="gender" value="Male"> Male
				<input type="radio" name="gender" id="gender" value="Female" checked> Female
				<input type="radio" name="gender" id="gender" value="Other"> Other
			<?php 
			}
			else
			{
			?>
				<input type="radio" name="gender" id="gender" value="Male"> Male
				<input type="radio" name="gender" id="gender" value="Female"> Female
				<input type="radio" name="gender" id="gender" value="Other" checked> Other
			<?php
			}
			?>
	</tr>
		
	<tr>
		<td>City : 
		<td><input type="text" name="city" id="city" value="<?php echo $row['city']; ?>">
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