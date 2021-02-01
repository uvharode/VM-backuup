<?php

$dbh = new PDO("mysql:dbname=lib;host=localhost",'my_user','my_password');
function getUserById($userId)
{
    $sql = 'select * from user1 where user_id = 3';
    foreach ($userId->query($sql) as $row)
    {
        print $row['user_name']."\t";
        print $row['user_id']."\t";
    }
}
getUserById($dbh);


?>