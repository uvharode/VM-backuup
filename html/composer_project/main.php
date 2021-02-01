<?php

require_once "vendor/autoload.php";
require_once "ntw.php";

use NumberToWords\NumberToWords;

$numberToWords = new NumberToWords();

echo translateToFrench(123,$numberToWords) . PHP_EOL;
echo translateToEng(123,$numberToWords) . PHP_EOL;

?>