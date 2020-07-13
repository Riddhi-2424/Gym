<!DOCTYPE html>
<html>
<body>
<head>
<title> form </title>
</head>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";
echo "enterring ";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"])){
echo "Done ";	
$fname = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sql = "INSERT INTO user (`fname`, `phone`, `email`) VALUES ('$fname','$phone', '$email')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>