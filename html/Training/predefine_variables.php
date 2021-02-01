

<?php
//predefine_variables.php?country=india&state=maharashtra
echo "<br/>";
//print_r($_SERVER);
echo $_SERVER['HTTP_HOST'];
echo "<br/>";

print_r ($_GET['country']);
echo "<br/>";
print_r ($_GET['state']);
?>