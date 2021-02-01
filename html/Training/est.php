<?php

echo "A $color $fruit";
echo "</br>";

include 'vars.php'; //to include files multiple times
echo "A B $color $fruit";
echo "</br>";

include_once 'vars.php'; //For using file only one time ||use this it will not give you error
echo "A B C $color $fruit";
echo "</br>";

require 'vars.php';
echo "A B C D $color $fruit";
echo "</br>";

require_once 'vars.php';
echo "A B C D E $color $fruit";

?>