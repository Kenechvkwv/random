<?php
$url = "www.learncode.com";
if (preg_match("/learn/", $url))
{
	echo "the url $url contains the word learn";
}
else
{
	echo "the url $url does not contain the word learn";
}
?>