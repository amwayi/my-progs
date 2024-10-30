<?php
$servername = "localhost";
$username = "root";
$password = "12345";

$conn = new mysqli ($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: <br><br>" . $conn->connect_error);
}
echo "connection successful<br><br>";

$sql = "CREATE DATABASE kenya4; USE kenya4; CREATE TABLE users (name varchar(255), username varchar(255), password varchar(255)); INSERT INTO users (name, username, password) values ('philip', 'israel', 'amwayi')";
mysqli_query($conn, $sql);

/*
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}*/
?>