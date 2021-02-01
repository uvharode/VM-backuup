<?php
//The cURL stuff...
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"./test-img.jpg");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
$picture = curl_exec($ch);
curl_close($ch);
//Display the image in the browser
header('Content-type: image/jpeg');
echo $picture;
?>