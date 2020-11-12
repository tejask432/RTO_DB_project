<!DOCTYPE html>
<html>
<head>
<title>RTO-Feedback</title>
<link href="css/stylesheet.css"  type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="header">
	<div id="search">
		<form action="https://www.google.co.in" method="get">
              <input type="text" name="search" placeholder="Search.." title="Keyword" class="txt_field" />
              <input type="submit" name="Search" value=" " title="Search" class="sub_btn" />
        </form>		
	</div>
</div>
	
<div id="titlebar">

	<div id="site_title"><a href="#" title="RTO"></a>
	</div>
	
	<div id="container">
		<nav>
			<ul>
				<li><a href="index.php" >Home</a></li>
				<li><a>About Us</a>
                    <ul>
                        <li><a href="intr.php" title="Introduction">Introduction</a></li>
                        <li><a href="org.php" title="Organisation chart">Organisation chart</a></li>
                        <li><a href="fun.php" title="Functions & Duties">Functions & Duties</a></li>
					</ul>
				</li>
				<li><a>Services</a>
					<ul>
						<li><a href="rto_b.php" title="RTO_Branch">RTO_Branch</a></li>
						
						<li><a href="dl.php" title="DL Services">DL Services</a></li>
						<li><a href="vr.php" title="Vehicle Registration">Vehicle Registration</a></li>
					</ul>
				</li>
				<li><a href="contact.php" title="Contact">Contact Us</a>
				</li>
				<li><a>Help</a>
				<ul>
					<li><a href="feed.php" title="Feedback">Feedback Form</a></li>
					<li><a href="more_l.php" title="Links">More Links</a></li>
					</ul></li>
				<li><a href="logout.php" title="Logout">Logout</a></li>
			</ul>	
		</nav>
    </div>
	
</div>

<div id="main">	
<div id="tooplate_main">
	<img src="images/map.jpg" border=1px width=400px height=300px align="right"/>
	<div class="col_2 float_l">
<h3>Feedback Form</h3>
<div id="contact_form">
	<form method="post" name="contact" action="feed.php">
	<?php
   session_start();
   if(isset($_SESSION['username'])){
$id=$_SESSION['id'];
$username=$_SESSION['username'];
}
else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
 ini_set('mysql.connect_timeout',300);
   ini_set('default_socket_timeout',300);
$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','rto');

//if the registration button is clicked

if(isset($_POST['sub'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$subject = mysqli_real_escape_string($db, $_POST['subject']);
   $message = mysqli_real_escape_string($db, $_POST['message']);
	 $sql = "insert into feedback(name,email,subject,message) values ('$name','$email','$subject','$message')";
	 mysqli_query($db,$sql);
	 echo "<h3>THANK YOU</h3>";
	}
	

?>		
				<label for="author">Name:</label> <input type="text" id="author" name="name"required="required" />
				
													
				<label for="email">Email:</label> <input type="email" required="required" name="email" id="email" />
				
											
				<label for="subject">Subject:</label> <input type="text" required="required" name="subject" id="subject"/>				               
				
							
				<label for="text">Message:</label> <textarea id="text" name="message" rows="0" cols="0" required="required"></textarea>
								
												
			<input type="submit" value="Send" id="submit" name="sub" class="submit_btn_l" />
				<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn_r" />
                            
            </form>	
	</div>
	</div>
 </div>	
 </div>
  <div class="cleaner"></div>
  
<div id="social_button" align="center">

        	<h4><u>Contact Details</u></h4>
            <b><p>Commissioner for Transport and Road Safety ,1st floor,TTMC.Building ,Shantinagar, Bengaluru-560027. </p><p> phone : 080-22210994</p> <p>E-mail : transcom@nic.in</p></b>
                <a href="https://www.facebook.com/Transport-Department-293677424355837/?skip_nax_wizard=true"><img alt="Facebook" src="images/facebook-32x32.png" title="Facebook" /></a>
                <a href="http://www.flickr.com"><img alt="Flickr" src="images/flickr-32x32.png" title="Flickr" /></a>
                <a href="https://twitter.com/TransportDepart"><img alt="Twitter" src="images/twitter-32x32.png" title="Twitter" /></a>
                <a href="http://www.youtube.com/TransportDepart"><img alt="Youtube" src="images/youtube-32x32.png" title="Youtube" /></a>
                
</div>	
	
<div id="bar_wrapper">

	<div id="bar">Copyrights @ 2017 <a href="http://transport.karnataka.gov.in/">Transport Department</a>
    </div>
</div>
</body>		
</html>		

  