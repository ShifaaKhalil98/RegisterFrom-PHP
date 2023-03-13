<?php
// $ip_address = file_get_contents('https://api.ipify.org');
// echo "Your IP address is: " . $ip_address;


// Get the user's IP address from the $_SERVER superglobal
$user_ip = $_SERVER['REMOTE_ADDR'];

// Use ipinfo.io API to get location information
$location_url = 'https://ipinfo.io/'.$user_ip.'/json';
$location_json = file_get_contents($location_url);
$location_data = json_decode($location_json);

// Extract latitude and longitude from location data
$latitude = $location_data->loc->split(',')[0];
$longitude = $location_data->loc->split(',')[1];

// Output the latitude and longitude
echo "Latitude: " . $latitude . ", Longitude: " . $longitude;


?>