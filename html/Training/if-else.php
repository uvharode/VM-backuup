<?php
//if
$country = 'INDIA';
if($country == 'INDIA')
{
echo "I love my $country";
}
echo "</br>";

//if-else.php?country=BHARAT
//if-else
$nation = $_GET['country'];
if($nation != 'BHARAT')
{
    echo "I am not from here.";
}
else
{
    echo " $nation is my Country.";
}
echo "</br>";

//if-else.php?country=BHARAT
//using get by giving data in address bar
print_r ($_GET['country']);

?>