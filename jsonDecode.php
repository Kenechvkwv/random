<?php
//declare a json string
$json = '{"Peter":"BMW","Ben":"Ford","Joe":"Toyota"}';

//use the json encode function to decode the json into an object
$objectCar = json_decode($json);

//use the json encode function to decode the json string into an array
$arrayCar = json_decode($json, true);

//output the intial json string
var_dump($json);
echo "<br>";

//output the car object
var_dump($objectCar); 
echo "<br>";

//output the car array
var_dump($arrayCar);