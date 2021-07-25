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
// //creating a new table
// $table = "CREATE TABLE sqlCount (ID int NOT NULL AUTO_INCREMENT, Name text, Occupation text, Salary int, PRIMARY KEY (ID))";
// if ($conn->query($table) === TRUE) {
//     echo "Table SQLCount created successfully<br>";
// } else {
//     echo $conn->error;
// }
// //Inserting multiple data
// $sql = "INSERT INTO 
//     sqlCount(Name, Occupation, Salary)
// VALUES
//     ('Frank', 'Banker', 80000),
// 	('Ada', 'Dancer', 60000),
//     ('Obinna', 'Builder', 70000),
//     ('Melissa', 'Actress', 100000)";

// if ($conn->query($sql) === TRUE) {
//     echo "Records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }





$conn->close();
