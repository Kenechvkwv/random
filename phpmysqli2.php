<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learncode";

// Create connection
$conn = new mysqli("localhost", "root", "", "learncode"); //variables can be used
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected succesfully" . "<br/>";
}

if ($conn->query("CREATE TABLE learncodetable3(id int, name varchar(20))")) {
    echo "New Learncode Table successfully created";
}
?>