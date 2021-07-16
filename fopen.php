<?php
//opening the learncode.txt file and assigning it to a variable
$file = fopen('learncode.txt', 'a+');
//declaring a variable to house the content of the text we want to input
$content = "This is the content of our learncode.txt file\nPay attention\n";
//the $content variable contains the string to be added to the "learncode.txt"
fwrite($file,$content);
//the fclose() saves and closes the file.
fclose($file);
?>