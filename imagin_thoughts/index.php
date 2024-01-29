<?php
	include"config.php";
	$select = "select * from `thoughts`";
	$res = $con -> query($select);	
?>
<html>
    <head>
        <title>Thoughts Form</title>
    </head>
    <body>
		<div id="thoughtsForm">
            <h1>Thoughts Form</h1>
            <form action="insert.php" method="post">
            <table>
                <tr>	
                    <th>Enter Your Thoughts : </th>
                    <td><input type="text" name="txtThoughts" id="txtThoughts"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit Thoughts">
                        <input type="reset" name="btnClear" id="btnClear" value="Clear Thoughts">
						<button type="button" onclick="loadDoc()">Show via AJAX</button>
                    </td>
                </tr>
                <tr><td colspan="2">Lab 01 - Option 1: Click to <a href="use_api.php">Use OpenWatherAPI.</a></td></tr>
                <tr><td colspan="2">Lab 01 - Option 2: Click to <a href="apiCreate.php">Show Custome API.</a></td></tr>

            </table>
            </form>
			
			<table border="1px">
				<tr>
					<th>I'd</th>
					<th>Thoughts</th>
					<th>Time</th>
					<th>Delete</th>
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
					<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
		<script>
			function loadDoc() {
				const xhttp = new XMLHttpRequest();
				xhttp.onload = function() {
					document.getElementById("thoughtsForm").innerHTML = this.responseText;
				}
				xhttp.open("GET", "select.php", true);
				xhttp.send();
			}
		</script>
    </body>
</html>
