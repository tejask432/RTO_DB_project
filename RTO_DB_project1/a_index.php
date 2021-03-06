<?php
session_start();

include_once('connect_db.php');
if(isset($_SESSION['a_username'])){
$id=$_SESSION['id'];
$username=$_SESSION['a_username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin_login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-L</title>
<link href="css/style.css"  type="text/css" rel="stylesheet"/>
<link href="css/slider.css"  type="text/css" rel="stylesheet"/>
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
				<li><a href="a_index.php" >Home</a></li>
				
				<li><a href="users.php" title="Contact">Users</a>
				</li>
				<li><a href="logout.php" title="Logout">Logout</a></li>
			</ul>	
		</nav>
    </div>
</div>
<div id="main">	
<h3 align="center">Welcome to admin</h3>
<form action="a_index.php"/>
<div id="body_l">
		<section class="slideshow">
  <div class="slideshow-container slide">
    <img src="images/slider/01.jpg"/>
    <img src="images/slider/02.jpg"/>
    <img src="images/slider/03.jpg"/>
	<img src="images/slider/04.jpg"/>
  </div>
</section>
	</div>
	
	<div id="body_r">
		<U><h4>Introducing Transport Department</h4></u>
		<p>The Department of Transport was constituted by Government Order No.T6811:6865 RT :53-54:10 Dated 03-03-1955 vide Notification 4285-98 MV-23-56-57 Dated 27-08-1956. Then it was named as Motor Vehicles Department. Thereafter, the Department was re-named as TRANSPORT DEPARTMENT.</p>
		<p>The primary thrust areas of the Department are enforcement of Motor Vehicles Act and Rules and collection of Tax. Road Transport is no more the domain of public sector. Private sector has emerged as a strong force in providing efficient transport facilities throughout the Nation.</p>
		<p>The Department is mainly responsible for regulation of the use of Motor Vehicles in the State and collection of tax on Motor Vehicles, Road Safety, Control of Air and Noise pollution in accordance with the provisions of the following Acts and Rules:</p>
	<ol>
		<li>The Motor Vehicles Act 1988 (Central Act 59 of 1988)</li>
		<li>Central Motor Vehicles Rules, 1989</li>
		<li>The Karnataka Motor Vehicles Rules, 1989</li>
		<li>The Karnataka Motor Vehicles Taxation Act 1957 (Karnataka Act 35 of 1957)</li>
		<li>The Karnataka Motor Vehicles Taxation Rules, 1957.</li>
	</ol>
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

	<div id="bar">Copyrights @ 2017 <a href="http://transport.karnataka.gov.in/">Transport Department</a>
    </div>
</div>
</body>		
</html>		

  