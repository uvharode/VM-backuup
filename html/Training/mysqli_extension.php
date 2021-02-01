<?php
$link = mysqli_connect("localhost","my_user","my_password","lib");
if(mysqli_connect_error()){
    printf("connect failed: %s\n",mysql_connect_error());
    exit();
}
if($result = mysql_query($link,"select user_name from user1")){
    printf("select returned %d rows.\n",mysqli_num_rows($result));
    mysqli_free_result($result);
}
mysqli_close($link);
?>