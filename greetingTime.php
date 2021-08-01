<?php
//Here we define our timezone
$Timezone = 'Africa/Lagos';
date_default_timezone_set($Timezone);
//using the date function to output date
$welcome = "Welcome!";
$time = date("H:i");

//Start conditionals based on set time 
//the AND "&&" conditional verifies the validity of both arguments
if ($time >= 0 && $time <= 11)
    $welcome = "Good Morning!";
else if ($time >= 12 && $time <= 17)
    $welcome = "Good Afternoon!";
else if ($time >= 18 && $time <= 23)
    $welcome = "Good Evening!";
else $welcome = "Greetings!";

//Display our greeting 
echo "$welcome " . "<br>";
echo "The time is " . $time;
