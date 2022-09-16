<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body{
background-color: aliceblue;
background-size: cover;
background-attachment: fixed;
}
table{
    text-align: center;
    color: indigo;

}
</style>
</head>
<body>
<br><br><br>
<div class="container">
<div class="jumbotron">
<h1 class="display-4" align="center">view  invigilation rooms</h1>
<center>
<table class="table" border="1">
<thead class="thead-dark">
<tr>
<th scope="col">facultyname</th>
<th scope="col">room no</th>
</tr>
</thead>
<tbody>
</center>
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

$sql = "Select * from invigilation";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
 {
echo "<tr><td>" . $row["facultyname"] . "</td><td>" . $row["roomno"] . "</td></tr>";
}
echo "</table>";
}

?>
</tbody>
</table>
</p>
</div>
</div>
</body>
</html>