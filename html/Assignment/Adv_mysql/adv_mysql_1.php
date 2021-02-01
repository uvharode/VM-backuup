<?php
ini_set('display_errors', 1);
$con = mysqli_connect('localhost', 'my_user', 'my_password','employee');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

  $result = $con -> query("select * from emp_details order by salary DESC;");

 while($row = $result -> fetch_assoc()){
     echo "ID : " .$row["id"]." Name : " .$row["name"]." Department : " .$row["department"]." Salary : " .$row["salary"]." Gender : " .$row["gender"]."<br>";
 }

 $con -> close();

?>