<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> view seating plan</title>
<style>
body{
background-color: cyan;
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
<h1 class="display-4" align="center">view seating plan</h1>
<center>
<table class="table" border="1">
<thead class="thead-dark">
<tr>
<th scope="col">colnum1</th>
<th scope="col">column2</th>
<th scope="col">column3</th>
<th scope="col">column4</th>
<th scope="col">column5</th>
<th scope="col">column6</th>
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

$sql = "Select * from seat";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
 {
echo "<tr><td>" . $row["col1"] . "</td><td>" . $row["col2"] . "</td>
<td>". $row["col3"] . "</td><td>" . $row["col4"] . "</td><td>". $row["col5"] ."</td><td>" . $row["col6"] . "</td></tr>";
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