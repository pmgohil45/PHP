<html>
	<form method="post">
		<input type="text" id="city_name" name="city_name" placeholder="Enter city name">
	</form>
</html>
<?php
$name = "prakash";
// Replace 'YOUR_API_KEY' with the API key you obtained from OpenWeatherMap
$apiKey = '139be5388f6af0a1b7b0566e66c45bf1';
$city = $_REQUEST['city_name'];
$metric = 'metric';
//$city = 'Pune'; // Replace with the city you want to get weather data for

// Make a request to the OpenWeatherMap API
$response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=$metric");

// Check if the request was successful
if ($response !== false) {
    // Decode the JSON response
    $weatherData = json_decode($response, true);

    // Check if the API returned valid data
    if ($weatherData !== null && isset($weatherData['main']['temp'])) {
        $temperature = $weatherData['main']['temp'];
        $pressure = $weatherData['main']['pressure'];
        $visibility = $weatherData['visibility'];
        $description = $weatherData['weather'][0]['description'];
        $coordLon = $weatherData['coord']['lon'];
        $coordLat = $weatherData['coord']['lat'];
        $country = $weatherData['sys']['country'];

        // Display the results
        echo "Current Temperature in $city: $temperature °C<br>";
        echo "Current Pressure in $city: $pressure<br>";
        echo "Current Visibility in $city: $visibility<br>";
        echo "Weather Description of $city: $description<br>";
		echo "Location Coords of $city: Longitude- $coordLon & Latitude-$coordLat-";
		for ($i = 0; $i < strlen($name); $i++) {
			$asciiValue = ord($name[$i]);
			echo "$asciiValue";
		}
		echo "<br>$city country code: $country<br>";
    } else {
        echo "Error: Unable to fetch weather data.";
    }
} else {
    echo "Error: Unable to connect to the OpenWeatherMap API.";
}



?>