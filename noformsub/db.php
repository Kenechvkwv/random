<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learncode";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//assigning variables to the ids from the HTML Form
$firstname = $conn->real_escape_string($_POST['firstname']);
$lastname = $conn->real_escape_string($_POST['lastname']);


$sql = "INSERT INTO noForm (firstname, lastname)
VALUES ('$firstname', '$lastname')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . "<br>" . mysqli_error($conn);
};

mysqli_close($conn);
?>