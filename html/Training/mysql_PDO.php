<?php
$dbh = new PDO("mysql:dbname=lib;host=localhost",'my_user','my_password');
function getUserList($conn)
{
    $sql = 'select user_name,user_id from user1 order by user_name';
    foreach ($conn->query($sql) as $row)
    {
        print $row['user_name']."\t";
        print $row['user_id']."\t";
    }
}
getUserList($dbh);
?>