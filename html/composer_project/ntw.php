<?php

function translateToEng($num,$numberToWords)
{
$numberTransformer = $numberToWords->getNumberTransformer('en');
return $numberTransformer->toWords($num); 
}

function translateToFrench($num,$numberToWords)
{
$numberTransformer = $numberToWords->getNumberTransformer('fr');
return $numberTransformer->toWords($num); 
}

?>