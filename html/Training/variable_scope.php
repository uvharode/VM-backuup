<?php

$a = 1;/*global scope */
function Test()
{
    $a = 5;
    $b = 10;
    echo $a;/* reference to the local scope variable */
    echo "<br/>";
    echo $b;
}
echo $a;//global value
echo "<br/>";
echo $b;//not print the local scope variable
echo "<br/>";
Test();//local variable called and print
?>