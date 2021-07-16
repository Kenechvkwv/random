<?php
// Create a new cURL resource and set the file URL to fetch through cURL
$curl = curl_init('https://swapi.dev/api/planets/');
if (!$curl) {
    die("Couldn't initialize a cURL handle");
};
// carry out the request
curl_exec($curl);
// close cURL resource to free up system resources
curl_close($curl);
?>