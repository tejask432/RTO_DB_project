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
<title>RTO Organisation</title>
<link href="css/stylesheet.css"  type="text/css" rel="stylesheet"/>
<link href="css/pdf.css"  type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="org.php"/>
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
					</ul>
				</li>
				<li><a href="logout.php" title="Logout">Logout</a></li>
			</ul>	
		</nav>
    </div>
</div>

<div id="main">	

<U><h4 align="center">Organisation chart</h4></u><br/><br/>

	<!-- responsive iframe --> 
<!-- ============== -->

<div id="Iframe-Cicis-Menu-To-Go" class="set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
  <div class="responsive-wrapper 
     responsive-wrapper-padding-bottom-90pct"
     style="-webkit-overflow-scrolling: touch; overflow: auto;">
     <iframe src="organisation_chart.pdf">
      <p style="font-size: 110%;"><em><strong>ERROR: </strong>  
An &#105;frame should be displayed here but your browser version does not support &#105;frames.</em> Please update your browser to its most recent version and try again, or access the file <a href="https://drive.google.com/file/d/0BxrMaW3xINrsR3h2cWx0OUlwRms/preview"with this link.</a></p>
    </iframe>
  </div>
</div>
</div>



 
 <div class="cleaner"></div>
  
<div id="social_button" align="center">

        	<h4><u>Contact Details</u></h4>
            <b><p>Commissioner for Transport and Road Safety ,1st floor,TTMC.Building ,Shantinagar, Bengaluru-560027. </p><p> phone : 080-22210994</p> <p>E-mail : transcom@nic.in</p></b>
                <a href="https://www.facebook.com/Transport-Department-293677424355837/?skip_nax_wizard=true">Facebook</a>
                <a href="http://www.flickr.com">Flickr</a>
                <a href="https://twitter.com/TransportDepart">Twitter</a>
                <a href="http://www.youtube.com/TransportDepart">Youtube</a>
                
</div>	
	
<div id="bar_wrapper">
	<div id="bar"><strong>Designed By: <a href="#">Tejas kumar</a></strong>
    </div>
</div>
</body>		
</html>		
