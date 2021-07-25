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
//creating a new table
$table = "CREATE TABLE sqlUnique (ID int NOT NULL AUTO_INCREMENT, Name text UNIQUE,  PRIMARY KEY (ID))";
if ($conn->query($table) === TRUE) {
    echo "Table SQLUnique created successfully<br>";
} else {
    echo $conn->error;
}
//Inserting multiple data
$sql = "INSERT INTO 
    sqlUnique(Name)
VALUES
    ('Frank'),
	('Ada'),
    ('Obinna'),
    ('Melissa')";

if ($conn->query($sql) === TRUE) {
    echo "Records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
