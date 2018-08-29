<?php

// set IP address and API key 
$ip = '72.229.28.185';
$api_key = 'YOUR_API_KEY';

// Initialize CURL:
$ch = curl_init('https://api.checkgeoip.com/'.$ip.'?api_key='.$api_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

// Output the "city" object
echo $api_result['city'];