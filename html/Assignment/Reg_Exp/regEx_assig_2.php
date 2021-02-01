<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

   $emailErr = "";
   $email = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // if(empty($_POST["email"])){
       $email = test_input($_POST["email"]);
       if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           $emailErr = "invalid";
       }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

   ?>

   <h2>Email Validation</h2>
   <form method="post" 
   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   E-mail : <input type="text" name="email">
   <br>
   <span class="error"><?php echo $emailErr; ?> </span>
   <br>
   <br>
   <input type="submit" value="Submit">
   </form>

   <?php
   echo "input: ";
   echo $email;
   ?>

</body>
</html>