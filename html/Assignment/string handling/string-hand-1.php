<?php

function palindrom($str)
{
    if(strrev($str) == $str)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

$string = "amma";

if(palindrom($string))
{
    echo "$string is palindrom ";
}
else
{
    echo "$string is not palindrom ";
}

?>