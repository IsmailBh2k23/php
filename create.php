<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "souk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO article (name , price, quantity) 
VALUES ('".$_POST["name"]."',". $_POST["price"]." , ".$_POST["qte"].")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>