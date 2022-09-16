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

session_start();
if(isset($_POST['save'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	if($password == $conpassword){
 		$sql="SELECT * from login where username='$username' ";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		if($count>0){
			$run="update login set password='$password'";
			mysqli_query($conn,$run);
			$data="update customer set password='$password'";
			mysqli_query($conn,$data);
			header("location:login.php");
		}
	}
else{
  echo "<script>alert('password and confirm password does not match')</script>";
}
}

?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="forgot.css">    
</head>    
<body>   
     <a href="login.php"><input type="button" name="login" id="login" value="Login"></a> 
      <a href="index.php"><input type="button" name="logout" id="logout" value="Log out"></a>  
    <h2>CHANGE PASSWORD</h2><br>    
    <div class="changepassword">    
    <form action="" method="POST"> 
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="username" id="Uname" placeholder="Username" required>    
        <br><br>    
        <label><b>New Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password" required>    
        <br><br>    
	  <label><b>Confirm Password     
        </b>    
        </label>    
        <input type="Password" name="confirmpassword" id="NPass" placeholder="Password" required>    
        <br><br>    
        <button name="save" id="save">Save</button>    
        <br><br>         
         
    </form>     
</div>    
</body>    
</html>     