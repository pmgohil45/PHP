<?php
	include"config.php";
	$select = "select * from image";
	$res = mysqli_query($con,$select);	
?>
<html>
<head>
	<title>View</title>
</head>
<body>
<table align="center" border="20vh inset">
<form action="" method="post">
<tr>
	<th>I'd</th>
	<th>Name</th>
	<th>Image</th>
	<th>Upload</th>
	<th>Delete</th>
	<th>API</th>
</tr>
<?php
	while($row = mysqli_fetch_assoc($res))
	{
?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><img src="<?php echo $row['img']; ?>" height="130vh" width="110vh" name="i" id="i"></td>
			<td><a href="update.php?id=<?php echo $id; ?>">Update</a></td>
			<td><a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
			<td><a href="apiCreate.php?id=<?php echo $id; ?>">Create API</a></td>
		</tr>
<?php
	}
?>
</form>
</table>
</body>
</html>