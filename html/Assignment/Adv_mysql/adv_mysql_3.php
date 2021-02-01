<?php
//oo style
include_once "adv_mysql_3_html.php";
ini_set('display_errors', 1);
$con = new mysqli('localhost', 'my_user', 'my_password','employee');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

//SHOW DATABASE

// $showDB = $_GET["showDB"];
//         $result = $con -> query("show databases");
//        while( $row = $result-> fetch_array(MYSQLI_NUM))
//        {
//         echo " Databases: " . $row[0] . "<br>";
//         }
       


    //SHOW TABLES FROM THE SELECTED DATABASE

    //     $db_name = $_GET["db_name"];
    //     $sql = "use $db_name";
    //     $result = $con -> query($sql);
    //     $result1 = $con -> query("show tables");
    //     while( $row = $result1-> fetch_array(MYSQLI_NUM)){
    //      echo "Database name :  " . $db_name . "  table name : " . $row[0] . "<br>";
    //  }
   

    //SHOW STRUCTURE OF A SPECIFIC TABLE
    
// $table_name = $_GET["tablename"];
// $sql = "desc $table_name";
// $result = $con -> query($sql);
// while($row = $result->fetch_assoc())
//     {
//     echo "Field : " .$row["Field"]." Type : " .$row["Type"]." Null : " .$row["Null"]." Key : " .$row["Key"]." Default : " .$row["Default"]." Extra : " .$row["Extra"]."<br>"; 
//     }
 
    //SHOW RECORDS OF TABLE
    $table_name = $_GET["tablename"];
    $sql = "select * from $table_name";
    $sql1 = "select count(*) from user_tab_columns where table_name = $table_name";
    $result = $con -> query($sql1);
    while( $row = $result-> fetch_assoc()){
          echo $row[] . "<br>";
         }
    // $result = $con -> query($sql);
    // while( $row = $result-> fetch_array(MYSQLI_NUM)){
    //       echo $row[2] . "<br>";
    //      }



 
  $con -> close();
?>
