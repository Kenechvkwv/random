<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajaxform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//assigning variables to the ids from the HTML Form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tel'];


$sql = "INSERT INTO forminfo (name, email, phone)
VALUES ('$name', '$email', '$phone  ')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};

mysqli_close($conn);
?>