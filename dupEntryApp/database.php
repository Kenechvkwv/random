<?php

use function PHPSTORM_META\elementType;

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learncode";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname); //variables can be used
    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "connected succesfully" . "<br/>";
    }
if(isset($_POST['submit']))
{   
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$tel = $conn->real_escape_string($_POST['tel']);

$sql = "INSERT INTO dupEntryApp (name,email,telephone) VALUES ('$name','$email','$tel')";
$query = mysqli_query($conn, "SELECT * FROM `dupEntryApp` WHERE email = '$email'");
if(mysqli_num_rows($query)>0){
    echo "Email Already Exists"."<br>";
}

if ($conn->query($sql) === TRUE) {

    echo "Submitted Successfully";

// } else {

//     echo "Submission Error" .  "<br>" ."<strong>". $conn->error."</strong>";

} else {
    echo "submission error"."<br>".$conn->error;
}
}
$conn->close();