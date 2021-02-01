<?php
include_once "regEx_assig_1_html.php";
$str = $_GET["phone"];
$str1 = substr($str,0,3);
$str2 = substr($str,3,3);
$str3 = substr($str,6,4);
echo "($str1) $str2 - $str3 ";
?>