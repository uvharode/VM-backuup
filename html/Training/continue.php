<?php
//print all except china 
$country = ['India', 'China','Korea','Japan'];

foreach ($country as $key => $val){
    //here key is the index of array
    if($val=='China')continue;
    echo $val;
    echo "<br/>";
}

?>