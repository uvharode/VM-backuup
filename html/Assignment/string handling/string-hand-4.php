<?php
$url = "https://www.google.com/example.asp/urvashi";
$id = substr($url, strrpos($url, '/') + 1);
echo "$id";
?>