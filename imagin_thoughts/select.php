<?php
	include"config.php";
//	$id = $_REQUEST['id'];
	$select = "select * from `thoughts`"; //where `id`='$id'";
	$res = $con -> query($select);
	/*while($row = $res -> fetch_assoc())
	{
		$id = $row['id'];
		$thoughts_text = $row['thoughts_text'];
		$thoughts_time = $row['thoughts_time'];
		echo $id."<br>";
		echo $thoughts_text."<br>";
		echo $thoughts_time."<br>";
	}*/
?>
			<table border="1px">
				<tr>
					<th>I'd</th>
					<th>Thoughts</th>
					<th>Time</th>
				</tr>
				<?php
				while($row = $res -> fetch_assoc())
				{
					$id = $row['id'];
					$thoughts_text = $row['thoughts_text'];
					$thoughts_time = $row['thoughts_time'];
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $thoughts_text; ?></td>
					<td><?php echo $thoughts_time; ?></td>
				</tr>
				<?php
				}
				?>
			</table>