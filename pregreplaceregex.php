<?php
$text = "Japan is a beautiful country with a rich history. I love Japan. Another country with a rich history is Japan";
//Using the $limit to indicate how many times the tagetted word:Japa, should be replaced. 
$limit = 2;
//the $count can be used to indicate the number of times the preg_replace is carried out
$count = 0;
//this replaces the word "Japan" with a pink coloured "Brazil"
$text = preg_replace("/Japan/", '<span style="color:deeppink; font-weight: bold;">Brazil</span>',$text, $limit, $count);
//echoes the new content of the $text variable as well as counts the number of replacements
echo $text . "<br>".$count." words were replaced"."<br>" ;

?>