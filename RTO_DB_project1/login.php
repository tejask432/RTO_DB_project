<?php
error_reporting(0);
session_start();
$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','rto');

if(isset($_POST['login'])){

 $name = mysqli_real_escape_string($db, $_POST['username']);
	
	$password = mysqli_real_escape_string($db, $_POST['password']);

	//ensure that form fields are filled properly

	if(empty($name)){
	  array_push($errors,"username is required");
	}
	if(empty($password)){
	  array_push($errors,"password is required");
	}
	if(count($errors) == 0){
	 $sql = "SELECT * FROM register WHERE username = '$name' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $c = mysqli_num_rows($result);	  	  
      
  if($c == 1) {
	 $_SESSION["id"]= $id;
   $_SESSION['username'] = $name;
    header("location: index.php");
    }
	 else{
	   array_push($errors,"wrong username/password combination");
	}
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>RTO_Login</title>
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
 <body>
 <center><img src="images/logo1.png" width="150px" height="100px" /></center>
	<div class="header">
	
     <h2>WELCOME</h2><br/>
	  <h5>Enter a login details..</h5>
	</div>
	<form method="post" action="login.php">
	  <?php include('error.php'); ?>
		<div class="input-group">
		<label>username</label>
   	 	<input type="text" name="username"/>
		</div>
   	 
		<div class="input-group">
   	 	<label>password</label>
   	 	<input type="password" name="password"/>
		</div>
   	 	<input type="submit" name="login" class="btn" value="Login"/>
		<p>
   	 	not yet a member?<a href="register.php"><b>Signup</b></a><br/>
		<a href="admin_login.php"><b>Login as admin</b></a>
		</p>
	</form>
	
	
</body>
</html>

