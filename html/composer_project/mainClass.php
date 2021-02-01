<?php

require_once "vendor/autoload.php";
//require_once "ntw.php";

use NumberToWords\NumberToWords;
use App\NtwClass;

$numberToWords = new NumberToWords();
$ntw=new NtwClass($numberToWords);

echo $ntw->translateToFrench(123,$numberToWords) . PHP_EOL;
echo $ntw->translateToEng(123,$numberToWords) . PHP_EOL;

?>