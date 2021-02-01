<?php
ini_set("display_errors",1);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://localhost/curl_rest.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);
echo "This is using CURL <br/>";
if(!curl_errno($ch))
{
    $info = curl_getinfo($ch);
    echo 'Took ',$info['total_time'],' seconds to send a request to',$info['url'],"\n";
    $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
    //if we change the url then it will show error
 //   echo 'Curl error: '.curl_error($ch);
}
echo $output;
curl_close($ch);
?>