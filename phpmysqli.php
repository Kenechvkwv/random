<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learncode";

// Create connection
$conn = new mysqli("localhost","root","","learncode");//variables can be used
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
    echo "connected succesfully"."<br/>";
}

$sql = "INSERT INTO learncodetable (name, course)
VALUES ('John', 'MySQL')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>