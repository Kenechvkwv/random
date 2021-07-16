<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqlJoin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
}

//inserting values into the "men" and "women" tables of the "sqlunion" database
$sql = "INSERT INTO men (Name, Age, Occupation) VALUES ('Stanley', '24', 'Front-end Dev')";
if ($conn->query($sql) === TRUE) {
  echo "New record for men created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO women (Name, Age, Occupation) VALUES ('Irene', '24', 'Back-end Dev')";

if ($conn->query($sql) === TRUE) {
  echo "New record for women created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();