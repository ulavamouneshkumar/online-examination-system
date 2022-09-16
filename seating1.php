<?php
$servername="localhost";
 $username="root";
 $password="";
 $dbname="project";
 $conn= mysqli_connect($servername, $username,$password, $dbname);
 if($conn)
 {
   //echo "connection ok";
 }
else
{
	echo "connection failed".mysqli_connect_error();
}
$sql = "CREATE TABLE IF NOT EXISTS seat(col1 VARCHAR(30) NOT NULL , col2 VARCHAR(30) NOT NULL , col3 VARCHAR(30) NOT NULL ,
 col4 VARCHAR(30) NOT NULL , col5 VARCHAR(30) NOT NULL ,  col6  VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error; 
}


if (isset($_POST['col1']) && isset($_POST['col2']) && isset($_POST['col3']) && isset($_POST['col4'])  && isset($_POST['col5']) && isset($_POST['col6'])) 
{
 
	$one = $_POST['col1'];
	$two = $_POST['col2'];
	$three=$_POST['col3'];
	$four=$_POST['col4'];
	$five=$_POST['col5'];
	$six=$_POST['col6'];
	$conn = new mysqli("localhost", "root", "", "project");
	$data = "INSERT INTO  seat(col1,col2,col3,col4,col5,col6) VALUES ('$one','$two','$three', '$four','$five','$six')";
		$res=mysqli_query($conn,$data);
		if($res)
		{
			header("location:admin.php");
		}
			else{
				header("location:index.php");
			}

$conn->close();
}
?>
