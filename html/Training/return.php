<?php

declare(strict_types = 1);
ini_set('display_errors',1);
error_reporting('E_ALL');


/*function returnIntValue(int $value):int{
    return $value;
} 
print(returnIntValue(5));
*/


function returnIntValue(int $value):int{
    return $value + 1.0;
} 
print(returnIntValue(5));




?>