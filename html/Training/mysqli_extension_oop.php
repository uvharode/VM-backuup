<?php
ini_set("display_errors",1);

$link = mysqli_connect("localhost","my_user","my_password","lib");
if($mysqli->connect_error)
{
    print_r("connect failed: %s\n",$mysql->connect_error);
    exit();
}
if($result = $mysql->query($link,"select user_name from user1"))
{
    print_r("select returned %d rows.\n",$result->num_rows);
    $result->close();
}
mysqli_close($link);
?>