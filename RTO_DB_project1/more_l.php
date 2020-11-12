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
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-Related Links</title>
<link href="css/stylesheet.css"  type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="more_l.php"/>
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
<h3 align="center">Websites of other Departments/Organizations</h3>
<table class="names" cellpadding="2" cellspacing="2" align="center">
	<tr>
		<th>No.</th>
		<th>Subject</th>
		<th>Link</th>    
	</tr>
	<tr>
		<td>1</td>
		<td><strong>Ministry of Road Transport and Highways,Government of India</strong></td>
		<td><strong><a href="http://morth.nic.in/">http://morth.nic.in/</a</strong>></td>
	</tr>
	<tr>
		<td>2</td>
		<td><strong>	Karnataka Government website</strong></td>
		<td><strong><a href="http://www.karnataka.gov.in/">http://www.karnataka.gov.in/</a</strong>></td>
	</tr>
	<tr>
		<td>3</td>
		<td><strong>	Pollution under control certificate validation</strong></td>
		<td><strong><a href="	http://www.karnatakapuc.in/">	http://www.karnatakapuc.in/</a</strong>></td>
	</tr>
	<tr>
		<td>4</td>
		<td><strong>		Transport Secretariat</strong></td>
		<td><strong><a href="http://202.138.101.165/transport-secretariat/home.html">http://202.138.101.165/transport-secretariat/home.html</a</strong>></td>
	</tr>
	<tr>
		<td>5</td>
		<td><strong>		K.S.R.T.C</strong></td>
		<td><strong><a href="	http://www.ksrtc.in/ ">http://www.ksrtc.in/</a</strong>></td>
	</tr>
	<tr>
		<td>6</td>
		<td><strong>	B.M.T.C</strong></td>
		<td><strong><a href="	http://www.mybmtc.com/"> 	http://www.mybmtc.com/</a</strong>></td>
	</tr>
	<tr>
		<td>7</td>
		<td><strong>Bengaluru Police</strong></td>
		<td><strong><a href="http://www.bcp.gov.in/">http://www.bcp.gov.in/</a</strong>></td>
	</tr>
	<tr>
		<td>8</td>
		<td><strong>	Karnataka Guarantee of Services to Citizens Systems - KGSC -Sakala</strong></td>
		<td><strong><a href="http://www.sakala.kar.nic.in/">http://www.sakala.kar.nic.in/</a</strong>></td>
	</tr>
	<tr>
		<td>9</td>
		<td><strong>	D.Devaraj Urs Truck Terminals LTD.</strong></td>
		<td><strong><a href="	http://www.devarajurstruckterminals.net/">	http://www.devarajurstruckterminals.net/</a</strong>></td>
	</tr>
	<tr>
		<td>10</td>
		<td><strong>		Road Safety Cell</strong></td>
		<td><strong><a href="	http://www.karnataka.gov.in/roadsafetycell/">	http://www.karnataka.gov.in/roadsafetycell/</a</strong>></td>
	</tr>
	
</table>
<h3></h3>
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

  