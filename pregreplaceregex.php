<?php
$text = "I love to design websites, and also design UI for mobile apps";
//this replaces the word "design" with a green tinted "develop"
$text = preg_replace("/design/", '<span style="background:green">develop</span>', $text);
//echoes the new content of the $text variable
echo $text;

?>