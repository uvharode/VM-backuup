<?php
ini_set("display_errors",1);
$param = ['name'=>'john','surname'=>'doe','age'=>36];
$defaults = array(
CURLOPT_URL=>'http://localhost/curl_rest1.php',
CURLOPT_GET=>true,
CURLOPT_GETFIELDS=>$param,
);
$ch = curl_init();
curl_setopt_array($ch,$defaults);
$output = curl_exec($ch);
echo $output;
curl_close($ch);
?>