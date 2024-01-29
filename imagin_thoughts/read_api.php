<?php
// Example endpoint to retrieve user information
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'getUser') {
    // Your logic to fetch user data goes here
    // Return the data as JSON
	
	include"config.php";
	$res = $con -> query("select * from `thoughts`");
	if($res){
		$blankArray = [];
		while($row = $res->mysqli_fetch_assoc())
		{
			$blankArray[] = $row;
		}
		header('Content-Type: application/json');
		echo json_encode($blankArray);
	}else{
        echo "Error: " . $mysqli->error;
	}
	echo"<pre>";
	print_r($blankArray);
	echo json_encode($blankArray);
	
/*
    $user = [
        'id' => 1,
        'name' => 'Prakash',
        'email' => 'prakash@gmail.com',
    ];
    header('Content-Type: application/json');
    echo json_encode($user);
*///}

?>