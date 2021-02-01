<?php
$servername = "localhost";
$username = "my_user@localhost";
$password = "my_password";
$dbname = "lib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user1 (user_name, user_id)
VALUES ('John', 2, 'pune')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>