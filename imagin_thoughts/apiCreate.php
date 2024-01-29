<?php
/*
// Function to generate a random API key
function generateApiKey($length = 32)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $apiKey = '';
    for ($i = 0; $i < $length; $i++) {
        $apiKey .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $apiKey;
}

// Function to associate an API key with a specific user or application
function allocateApiKey($userId){return generateApiKey();}

// Example: Allocate an API key to a user with ID 123
$userId = 123;
$apiKey = allocateApiKey($userId);

echo "Allocated API Key for User $userId is $apiKey<br>";

// Example: Verify an API key
function verifyApiKey($apiKey, $userId)
{
    return !empty($apiKey);
}

// Example: Verify the allocated API key
if (verifyApiKey($apiKey, $userId)) {
    echo "\nAPI Key is valid for User $userId.<br>";
} else {
    echo "\nAPI Key is not valid for User $userId.<br>";
}


*/
	include"config.php";
	$select = "select * from `thoughts`";
	$res = $con -> query($select);
	$count = mysqli_num_rows($res);
	echo "Total Fetched API : $count<br><br>";
	while($row = mysqli_fetch_assoc($res))
	{
		$blankArray[] = $row;
	}
	echo"<pre>";
	print_r($blankArray);
	echo json_encode($blankArray);
	
?>
<html>
<head>
	<title>API Create</title>
</head>
</html>