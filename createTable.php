<?php
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

    //creating a new table and checking for errors or duplicates.

    $sql = "CREATE TABLE People (ID int NOT NULL AUTO_INCREMENT, FirstName text(30), LastName text(30), PhoneNumber int(15), Email varchar(30), PRIMARY KEY (ID))";
    if ($conn->query($sql) === TRUE) {
        echo "People Table created successfully<br>";
    } else {
        echo $conn->error;
    }

?>