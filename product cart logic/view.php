<?php
	include"config.php";
	$sel = "select * from `product`";
	$res = $con -> query($sel);
?>
<html>
<head>
	<title>View</title>
</head>
<body>
<center>
<h1>^_^ View Data ^_^</h1>
<table border="1px">
<tr>
	<th>I'd</th>
	<th>Product Name</th>
	<th>Product Discription</th>
	<th>Product Price</th>
	<th>Add to Cart</th>
	<th>API</th>
	<th>Delete</th>
</tr>
<?php
while($row = $res -> fetch_assoc())
{
	$pid = $row['pid'];
?>
<tr>
	<td><?php echo $row['pid']; ?></td>
	<td><?php echo $row['pname']; ?></td>
	<td><?php echo $row['pdiscription']; ?></td>
	<td><?php echo $row['pprice']; ?></td>
	<td><a href="addToCart.php?id=<?php echo $pid; ?>">Add to Cart</a></td>
	<td><a href="api.php?id=<?php echo $pid; ?>">API Create</a></td>
	<td><a href="delete.php?id=<?php echo $pid; ?>">Delete Date</a></td>
</tr>
<?php
}
?>
</table>
<h2><a href="logout.php" >^ ^ Logout ^ ^</a></h2>
</center>
</body>
</html>