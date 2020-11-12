<?php
   session_start();
  ini_set('mysql.connect_timeout',300);
   ini_set('default_socket_timeout',300);
   if(isset($_SESSION['username'])){
$id=$_SESSION['id'];
$username=$_SESSION['username'];
}
else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-contact us</title>
<link href="css/stylesheet.css"  type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="contact.php"></form>
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
<h3 align="center">CONTACT DETAILS</h3>
<table class="names" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>
		<th>Designation & address of the Officer</th>
		<th>Phone/Email/Fax</th>    
	</tr>
	<tr>
		<td>
			<p><strong>Public Relations Officer,</strong></p>
			<p>Office of the Commissioner for Transport,</p>
			<p>1st Floor,TTMC Building,</p>
			<p>Shantinagar, Bengaluru - 560 027.</p>
		</td>
		<td>
			<p><strong>From 10:00 AM to 05:30 PM</strong></p>
			<p>Phone : 080-22210994</p>
			<p>E-mail <a href="mailto: proctr-trans- ka@nic.in">proctr-trans- ka@nic.in</a></p>
			<p>Phone : 9449863459</p>
		</td>
	</tr>
</table>
</div>
<h2 align="center"><u>Commissioner for Transport and Road Safety</u></h2>
<h1 align="center"><p>1st Floor, TTMC. Building, Shantinagar, Bengaluru-560027</p>
<p>PRO-phone : 080-22210994 Fax : 080-22235804 E-mail : transcom@nic.in</p>
<p>"Inviting Suggestion with respect to website improvement is appreciated."</p></h1>
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
 <div class="cleaner"></div>
</body>		
</html>		

  