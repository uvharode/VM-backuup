<?php
ini_set("display_errors",1);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://localhost/curl_rest1.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);
echo "This is using CURL <br/>";

if(curl_errno($ch))
{
    //if we change the url then it will
    echo 'Curl error: '.curl_error($ch);
}

echo $output;
curl_close($ch);
?>