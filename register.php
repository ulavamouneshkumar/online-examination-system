<html>
<head>
<title>REGISTRATION FORM</title>
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  body{
    background: green;
  }
  a.active {
        float: right;
  }
  </style>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

 <div class="login">
 <a  class ="active" href="index.php">Home</a>
<h1><b>REGISTRATION</h1>


<form  action="regdata.php" method="POST">
<p>Username</p>
 <input type="text" name="username" placeholder="enter name" required>
<p>Password</p>
<input type="password" name="password1" placeholder="enter password" required>
<p>Re Password</p>
<input type="password" name="password2" placeholder="confirm password" required>
<p>id number</p>
<input type="text" name="idno" placeholder="enter id"  required>
<p>Phone Number</p>
<input type="text" name="phone_no" placeholder="enter number" required>
<p>Email</p>
<input type="text" name="email" placeholder="enter domain mail" required>
<p> Role</p>
<input type="text" name="rol" placeholder="enter role of person" required><br>
<input type="submit" value="submit" >
</form>
</div>
</body>
</html>







