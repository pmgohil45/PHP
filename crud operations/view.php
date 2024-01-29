<?php
	require"config.php";
	$select = "select * from prakash";
	$res = mysqli_query($con,$select);
?>
<html>
<body bgcolor="#FFE4C4">
<center>
<h1>View Page</h1>
<table border="1vh">
	<tr>
		<th>Select</th>
		<th>I'd</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Contact</th>
		<th>Birth Date</th>
		<th>Gender</th>
		<th>City</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php
	while($row = mysqli_fetch_assoc($res))
	{
?>
	<?php $id = $row['id']; ?>
	<tr>
		<td><input type="checkbox" name="c_box" id="c_box" value="">
		<td><?php echo $id; ?>
		<td><?php echo $row['name']; ?>
		<td><?php echo $row['email']; ?>
		<td><?php echo $row['number']; ?>
		<td><?php echo $row['dob']; ?>
		<td><?php echo $row['gender']; ?>
		<td><?php echo $row['city']; ?>
		<td><a href="update.php?id=<?php echo $id; ?>">Update</a>
		<td><a href="delete.php?id=<?php echo $id; ?>">Delete</a>
	</tr>
<?php
	}
?>
</table>
</center>
</body>
</html>