<?php
phpinfo();

require_once "vendor/autoload.php";
require_once("ntw.php");

use NumberToWords\NumberToWords;

$numberToWords = new NumberToWords();

$numberTransformer = $numberToWords->getNumberTransformer('en');
echo $numberTransformer->toWords(1432); 

?>
