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
{echo "connection failed".mysqli_connect_error();}
$sql = "CREATE TABLE IF NOT EXISTS tim(day VARCHAR(20) NOT NULL,one VARCHAR(30) NOT NULL , two VARCHAR(30) NOT NULL , three VARCHAR(30) NOT NULL ,
 four VARCHAR(30) NOT NULL , five VARCHAR(30) NOT NULL ,  six  VARCHAR(30) NOT NULL, seven VARCHAR(30))";

if ($conn->query($sql) === TRUE) {
//echo "Table created successfully";
} else {
//echo "Error creating table: " . $conn->error; 
}


if (isset($_POST['day']) && isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3']) && isset($_POST['4'])  && isset($_POST['5']) && isset($_POST['6']) && isset($_POST['7'])) 
{
 
   $day=$_POST['day'];
	$one = $_POST['1'];
	$two = $_POST['2'];
	$three=$_POST['3'];
	$four=$_POST['4'];
	$five=$_POST['5'];
	$six=$_POST['6'];
	$seven= $_POST['7'];
	$conn = new mysqli("localhost", "root", "", "project");
	$data = "INSERT INTO  tim(day,one,two,three,four,five,six,seven) VALUES ('$day','$one','$two','$three', '$four','$five','$six','$seven')";
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
