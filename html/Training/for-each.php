<?php

//value array without key
$nation = ['India', 'China','Korea'];

//foreach syntax array name and key value
foreach ($nation as $key => $val){
    //here key is the index of array
    echo $key.":";
    echo $val;

    echo "<br/>";
}
echo "<br/>";

//array for key and value both
$country = ['c1'=>'India','c2'=>'China','c3'=>'South Korea'];

//foreach syntax array name and key value
foreach ($country as $key => $val){
    //here key is the index of array
    echo $key.":";
    echo $val;

    echo "<br/>";
}

?>