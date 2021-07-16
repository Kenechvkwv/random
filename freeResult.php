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
};
//Creating a new table
$table = "CREATE TABLE free_result (id int NOT NULL AUTO_INCREMENT, name varchar(20), country VARCHAR(30), PRIMARY KEY (id))";
if ($conn->query($table) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo $conn->error;
}
//insert into the table
$sql = "INSERT INTO free_result (name, country)
VALUES ('Lee','China');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>" .
        //using the mysqli_insert ID to call the ID of the latest entry 
        "Latest Inserted ID is" . mysqli_insert_id($conn) . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};
//creating a query
$NewSql = "SELECT * FROM free_result";
if ($result = mysqli_query($conn, $NewSql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>country</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['country'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set using the Mysqli free result function
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    };
}
// Close connection
mysqli_close($conn);
