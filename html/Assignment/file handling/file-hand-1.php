<?php  
  
session_start(); //it should be use whenever the session variable is used.
   
if(isset($_SESSION['views'])) //this is the session var which is used to store views count for a users session.
//view is the session name, should be always in ''    
//isset() returns true / false wether the parameter is set or not
$_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo "views = ".$_SESSION['views']; 


  
?> 