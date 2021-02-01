<?php

$str = "the quick brown fox jumps over the lazy dog.";
$wordToChange = "/the/";
$replace = "That";
echo preg_replace($wordToChange,$replace,$str,1);
//(word to change, word to replace, main string, how many to replace)

?>