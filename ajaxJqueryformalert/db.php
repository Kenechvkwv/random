<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learncode";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// assigning variables to the ids from the HTML Form
$name = $conn->real_escape_string($_POST['name']);
$hobby = $conn->real_escape_string($_POST['hobby']);

$sql = "INSERT INTO newTable (name, hobby) VALUES (\"".$name."\", \"".$hobby."\")";

if ($conn->query($sql) === TRUE) {
    echo "Submitted Successfully";
} else {
    echo "Submission Error" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
