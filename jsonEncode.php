<?php
//creating an array
$cars = array(
    "Peter"=>"BMW", "Ben"=>"Ford", "Joe"=>"Toyota"
);

//use the json encode function to encode the values of $cars
$jsonCars = json_encode($cars);

//display output
echo $jsonCars;
