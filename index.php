<!doctype html>
<html lang="en">
<head>
  <title> online examination system></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<img src="images\logo.jpg" alt="gayatri vidhya parshad" align="left"  width="90" height="70">
<img src="images\logo.jpg" alt="gayatri vidhya parshad" align="right"  width="90" height="70">
<h1>ONLINE EXAMINATION </h1>
<div class="navbar">
<a href="login.php"> Login</a>
<a class="active" href="register.php"> Register</a>
<a class="link" href="rules.php"> rules</a>
<a href="about.php"> About</a>
</div>
<script>
function validateform(){
var password =document.myform.password.value;
if(password.length <6){
   alert("password must be atleast 6 characters long")
   return false;
}

}
</body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS project";
if ($conn->query($sql) === TRUE) {
//echo "Database created successfully";

mysqli_select_db($conn,"project");
//Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS registration( username VARCHAR(30) NOT NULL , password1 VARCHAR(10) NOT NULL , password2 VARCHAR(10) NOT NULL ,
 idno VARCHAR(20) NOT NULL , phone_no VARCHAR(10) NOT NULL ,  email  VARCHAR(50) NOT NULL, rol VARCHAR(20))";

if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}


$sql="INSERT INTO `registration`(`username`, `password1`, `password2`, `idno`, `phone_no`, `email`,`rol`) VALUES ('admin','admin','admin','0','0','0','admin')";
if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>
</html>