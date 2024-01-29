<?php
	include"config.php";
	$pid = $_REQUEST['id'];
	session_start();
	$sel = "select * from `product` where `pid`='$pid'";
	$res = $con -> query($sel);
?>
<html>
<head>
	<title>Add to Cart</title>
</head>
<body>
<center>
<h1>^_^ Add to Cart ^_^</h1>
<table border="1px">
<tr>
	<th>I'd</th>
	<th>Product Name</th>
	<th>Product Discription</th>
	<th>Product Price</th>
	<th>Remove Product</th>
	<th>Add More Product</th>
</tr>
<?php
while($row = $res -> fetch_assoc())
{
	$id = $row['pid'];
?>
<tr>
	<td><?php echo $row['pid']; ?></td>
	<td><?php echo $row['pname']; ?></td>
	<td><?php echo $row['pdiscription']; ?></td>
	<td><?php echo $row['pprice']; ?></td>
	<td><a href="removeProduct.php?id=<?php echo $id; ?>">Remove</a></td>
	<td><a href="addMore.php?id=<?php echo $id; ?>">Add More</a></td>
	<td><a href="insertToCartDB.php?id=<?php echo $id; ?>">Add More</a></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>