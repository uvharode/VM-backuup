
<?php
$ch = curl_init('http://404.php.net/');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_exec($ch);
if(curl_errno($ch))
{
    echo 'Curl error: '.curl_error($ch);
}
curl_close($ch);
?>