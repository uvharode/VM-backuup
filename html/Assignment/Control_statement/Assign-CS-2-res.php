<?php

include "Assign-CS-2.php";

if($_POST["marks"]>=800)
{
    echo $_POST["username"] ." has got Distinction ";
}
elseif($_POST["marks"]>=500 && $_POST["marks"]<800) 
{
    echo $_POST["username"] ." has got first class ";
}
elseif($_POST["marks"]>=400 && $_POST["marks"]<500) 
{
    echo $_POST["username"] ." has got pass ";
}
else
{
    echo $_POST["username"] ." has failed ";
}

?>