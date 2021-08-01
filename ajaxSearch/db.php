<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "learncode";
$conn = new mysqli($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect MySql Server:');
}

if (isset($_POST['query'])) {

    $search = mysqli_real_escape_string($conn, $_POST['query']);
    $query =  "SELECT * FROM ajaxSearch WHERE name LIKE \"%".$search."%\"";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0){
    echo "<table>
<tr>
<th>Age</th>
<th>Occupation</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Occupation'] . "</td>";
  echo "</tr>";
}
echo "</table>";}
else{
    echo "user not found";
}
}
