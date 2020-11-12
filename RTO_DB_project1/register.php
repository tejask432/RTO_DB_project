<?php 
session_start();
$username = "";
$email = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','rto');

//if the registration button is clicked

if(isset($_POST['register'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
   
	//ensure that form fields are filled properly

	if(empty($username)){
	  array_push($errors,"username is required");
	}
	 else {
			$query= "SELECT username FROM register where username='$username'";
			$result=mysqli_query($db,$query);
			$num = mysqli_num_rows($result);
			if($num==1){
			array_push($errors,"username is exist");
			}
		}
	if(empty($email)){
	  array_push($errors,"email is required");
	}
	if(empty($password)){
	  array_push($errors,"password is required");
	}

	//if there are no errorss savce usert to database

	if(count($errors)==0){
	 $sql = "insert into register(username,email,password) values ('$username','$email','$password')";

	 mysqli_query($db,$sql);
	 $_SESSION['username'] = $username;
	 $_SESSION['success'] = "you are now logged on";
	 header('location:success.php');
	}
	
}
?>


<!DOCTYPE html> 
<html>
<head>
  <title>RTO-Register</title>
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
 <body>
 <center><img src="images/logo1.png" width="150px" height="100px" /></center>
 <div id="background" ><p id="bg_text">RTO</p></div>
		<div class="header">
			<h2>Fill the Details..</h2>
		</div>
				<form method="POST" action="register.php">
				 <?php include('error.php'); ?>
			<div class="input-group">
				<label>username</label>
				<input type="text" name="username"/>
			</div>
			<div class="input-group">
				<label>Email</label>
			<input type="email" name="email" placeholder="@gmail.com"/>
			</div>
			<div class="input-group">
				<label>password</label>
				<input type="password" name="password"/>
			</div>
				<input type="submit" name="register" class="btn" value="Register"/>
			<p>
   	 	Already a member?<a href="login.php"><b>Login</b></a>
		</p>
	</form>
  </body>
  </html>

