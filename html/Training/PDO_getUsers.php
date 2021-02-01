<?php
$db = new PDO("mysql:dbname=lib;host=localhost",'my_user','my_password');
function getUsers($conn){
    $sql = "select * from user1";
    $res = $conn -> query($sql);
    return $res -> fetchAll();
}
var_dump (getUsers($db));

function getUserByID($conn,$userId){
    $getUserByIdStatement = $conn -> prepare("select * from user1 where user_id = 3");
    print_r($getUserByIdStatement);
    $res = $getUserByIdStatement->execute(array($userId));
    print_r($conn->errorinfo());
    var_dump($res);
    return $getUserByIdStatement->fetch();
}
var_dump(getUserByID($db,1));

?>