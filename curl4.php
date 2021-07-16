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

    $check = "CREATE TABLE starwars (ID int NOT NULL AUTO_INCREMENT, Name text, API text, PRIMARY KEY (ID))";
    if ($conn->query($check) === TRUE) {
        echo "starwars created successfully<br>";
    } else {
        echo $conn->error;
    }
    // Create a new cURL resource and set the file URL to fetch through cURL

    $curl = curl_init('https://swapi.dev/api/');
    if (!$curl) {
        die("Couldn't initialize a cURL handle");
    };
    //This option will return data as a string instead of direct output
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // carry out the request
    $result = curl_exec($curl);

    // check for any errors
    if (curl_errno($curl)) {
        echo (curl_error($curl));
        die();
    };

    // close cURL resource to free up system resources

    curl_close($curl);
    //Convert data into a JSON format, with Arrays

    $response_data = json_decode($result, true);
    //Print out the array format of the data from the Star Wars API
    echo('<pre>');
    print_r($response_data);
    echo('</pre>');
    echo('<br>');
    foreach ($response_data as $name => $api) {
        $query = "INSERT INTO starwars (Name, API) VALUES (\"".$name."\", \"".$api."\")";
        $conn->query($query);
        if ($conn->errno){
            echo($conn->error); die();
        }
    }
?>