<?php 
$string = "hello";
//then we are checking if the variable "string" exists
if (isset($string)) {
  echo "Variable 'string' exists.<br>";
}
else {
    echo "Variable 'string' does not exist";
}
?>

<?php 
$string = "Learn Programming";
$trimString = trim($string,$characters = "\e\p\m\i\l");
echo $string."<br>";
echo $trimString;
?>

<?php 
$string = "Testing our Isset";

if ($string) {
  echo "Variable 'string' exists.<br>";
}
else {
    echo "Variable 'string' does not exist";
}
?>