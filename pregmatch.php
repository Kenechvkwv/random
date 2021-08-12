<?php
$subject = "Mr Brown matched his brown suitcase to his brown fedora";
//the letter "i" removes the case sensitivity
$pattern = '/brown/i';
preg_match_all($pattern, $subject, $matches);
print_r($matches);
?>