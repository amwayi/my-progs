<?php

$servername = "192.168.6.160";
$username = "israel_1";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
//$sql = "CREATE DATABASE teaDB_1";
/*"USE teaDB_1"; "CREATE TABLE users (fname varchar(255), lname varchar(255), username varchar(255), password varchar(255))";
"INSERT INTO users(fname, lname, username, password) values ('philip', 'amwayi', 'israel', 'omukaga')";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
*/
//$conn->close();

?>