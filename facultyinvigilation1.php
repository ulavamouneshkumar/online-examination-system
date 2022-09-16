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
$sql = "CREATE TABLE IF NOT EXISTS invigilation(facultyname VARCHAR(30) NOT NULL , roomno VARCHAR(30) NOT NULL )";

if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error; 
}


if (isset($_POST['facultyname']) && isset($_POST['roomno']) ) 
{
 
	$one = $_POST['facultyname'];
	$two = $_POST['roomno'];
	$conn = new mysqli("localhost", "root", "", "project");
	$data = "INSERT INTO  invigilation(facultyname,roomno) VALUES ('$one','$two')";
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
