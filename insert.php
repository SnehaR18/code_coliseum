<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codecoliseum_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO `login_user`(username,email,password)VALUES('$username', '$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>