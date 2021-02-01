<?php

function nextNumber()
{
    static $counter;
    return $counter = $counter + 1;
}

echo "I've counted to:" .nextNumber(). "<br>";
echo "I've counted to:" .nextNumber(). "<br>";
echo "I've counted to:" .nextNumber(). "<br>";


?>