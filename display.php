<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Time Table</title>
<style>
body{
background-color: lightgreen;
background-size: cover;
background-attachment: fixed;
}
table{
    text-align: center;
    color: red;

}
</style>
</head>
<body>
<br><br><br>
<div class="container">
<div class="jumbotron">
<h1 class="display-4" align="center">Time Table</h1>
<center>
<table class="table" border="1">
<thead class="thead-dark">
<tr>
<th scope="col">day</th>
<th scope="col">period1<br>(10:00-10:50)</th>
<th scope="col">period2<br>(10:50-11:40)</th>
<th scope="col">period3<br>(11:40-12:30)</th>
<th scope="col">period4<br>(12:30-01:20)</th>
<th scope="col">period5<br>(02:10-03:00)</th>
<th scope="col">period6<br>(03:00-03:50)</th>
<th scope="col">period7<br>(03:50-04:40)</th>
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

$sql = "Select * from tim";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
 {
echo "<tr><td>" . $row["day"]. "</td><td>" . $row["1"] . "</td><td>" . $row["2"] . "</td>
<td>". $row["3"] . "</td><td>" . $row["4"] . "</td><td>". $row["5"] ."</td><td>" . $row["6"] ."</td><td>" . $row["7"]. "</td></tr>";
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