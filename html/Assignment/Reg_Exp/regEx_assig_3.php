<?php
ini_set('display_errors', 1);
// include_once "regEx_assig_3.txt";
$str=file_get_contents('regEx_assig_3.txt');
$changes = array(); //patterns
$changes[0] = '/Indian/';
$changes[1] = '/Munnaf Patel/';
$changes[2] = '/Zaheer Khan/';

$replaces = array(); //replacements
$replaces[0] = 'Pak';
$replaces[1] = 'IMohammad Amir ';
$replaces[2] = 'Mohammad Asif';

echo "<hr>";
echo preg_replace($changes,$replaces,$str);

?>