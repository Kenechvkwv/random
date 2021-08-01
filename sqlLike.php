<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "learncode";
$conn = new mysqli($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect MySql Server:');
}
// query for only individuals whose hometowns start with the letter M and end in the letter R.
$query =  "SELECT * FROM biography WHERE Hometown LIKE 'm%r'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table>
<tr>
<th>Name</th>
<th>Age</th>
<th>Hometown</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
