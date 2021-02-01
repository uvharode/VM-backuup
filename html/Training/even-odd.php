<?php

for($i=0;$i<=20;$i++)
{

if($i%3 == 0)
{
    continue;
}

elseif($i%2 == 0)
{
echo "I am even $i";
echo "</br>";
}

else{
echo "I am Odd $i";
echo "</br>";
}

}

?>