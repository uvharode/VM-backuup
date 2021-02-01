<?php
//oo style
ini_set('display_errors', 1);
$con = new mysqli('localhost', 'my_user', 'my_password','employee');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  $result = $con -> query("select sum(salary) from emp_details where department = 'QA';");
  $row = $result-> fetch_array(MYSQLI_NUM);
  echo "The total salary distributed across the QA department : " . $row[0];
  $con -> close();
?>