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
<title>RTO-Introduction</title>
<link href="css/stylesheet.css"  type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="intr.php"/>
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
<div id="body_l" >
	<img src="images\01.jpg" border=1px/>
	</div>
	
	<div id="body_r">
		<U><h4>General Information to Vehicle Owners and Drivers</h4></u>
		<h1 class="subhead-blue"><u>Necessity of Driving Licence</u></h1>

<p>No person shall drive a motor vehicle in any public place unless he holds an effective driving licence issued to him authorizing him to drive the vehicle, and no person shall drive a transport vehicle hired or for his own use or rented , unless his driving licence specifically entitles him to do so.</p>
<div class="table-responsive mar-top">
<table border="1" cellpadding="2" cellspacing="2" class="names">
	<tbody>
		<tr>
			<th>Vehicle Type</th>
			<th>Age limit</th>
		</tr>
		<tr>
			<td>To drive a vehicle below 50 cc</td>
			<td>should have attained age of sixteen years.</td>
		</tr>
		<tr>
			<td>To drive a Transport vehicle</td>
			<td>should have attained twenty years.</td>
		</tr>
		<tr>
			<td>To drive any other motor vehicle</td>
			<td>should have attained eighteen years.</td>
		</tr>
	</tbody>
	<tbody>
	</tbody>
</table>
</div>
<p>Any person who has held an effective learner's licence to drive a particular type of vehicle for a period of at least thirty days can apply in <a href="http://transport.karnataka.gov.in/index.php/information/details/forms">form no 4</a> along with prescribed fee and obtain a Driving license for that type of vehicle for which learner's license has been issued after successfully completing through test of competence.</p>

<p>For details see form and procedures.</p>

	</div>
</div>

 <div class="cleaner"></div>
<hr color="gray">
 <div class="contentbx">
 <div class="cmscontent">



<h1 class="subhead-blue"><u>Allowing unauthorized persons to drive vehicles</u></h1>

<p>Whoever being the owner or person in-charge of a motor vehicle allows the vehicle to be driven by an under aged person not qualified to obtain driving licence as per sec 4 of MV act or a person without a valid driving licence shall be liable to be punishable with imprisonment for a term which may extend to three months and a fine of one thousand rupees or with both. (sec 180)</p>

<h1 class="subhead-blue"><u>Driving of vehicles by an under aged person or by a person without a driving licence</u></h1>

<p>Whoever drives a vehicle a valid driving licence shall be liable to be punishable with imprisonment for a term which may extent to three months and a fine of five hundred Rupees or with both. (sec 181)</p>

<p>Whoever being an under aged person and not qualified to obtain driving licence as per sec 4 of MV act drives a shall be liable to be punishable with imprisonment for a term which may extend to three months and a fine of five hundred Rupees or with both. (sec 181)</p>

<h1 class="subhead-blue"><u>Necessity of Registration:</u></h1>

<p>No person shall drive any motor vehicle and no owner of a motor vehicle shall cause or permit the vehicle to be driven in any public place, or in any other place unless the vehicle is registered in accordance with this chapter, and the carries a registration mark displayed in the prescribed manner.</p>

<p>for details see forms and procedures.</p>

<p>Size of letters and numerals of the registration mark: Refer rule 51 of CMV rules.</p>

<h1 class="subhead-blue"><u>Noting Transfer of ownership in the certificate of registration</u></h1>

<p>Whenever a vehicle is sold/purchased it is mandatory on the part of transferor (seller) to intimate the concerned Regional Transport officer by sending <a href="http://transport.karnataka.gov.in/index.php/information/details/forms">form 29</a> and transferee (buyer) to apply and obtain transfer of ownership within 14 days of the actual transaction. ( Delivery note, sale receipt have no relevance as far as section 50 of motor vehicle act governing transfer of ownership is concerned). Also the intimation on the part of the seller will not facilitate the noting of transfer of ownership in the records. The transaction will recorded in the certificate of registration only when both seller (transferor) and transferee intimate the registering authority.</p>

<p>for details see forms and procedures.</p>

<h1 class="subhead-blue"><u>Noting of Change of address in the certificate of registration</u></h1>

<p>Whenever there is change of residence of the registered owner it is mandatory to intimate the registering authority, in <a href="http://transport.karnataka.gov.in/index.php/information/details/forms">form 33</a> within 30 days of such change.</p>

<p>for details see forms and procedures.</p>

<h1 class="subhead-blue"><u>Renewal of Registration</u></h1>

<p>All non transport vehicles which have completed 15 years of age shall obtain renewal of registration certificate. The certificate shall be renewed for a period of five years. the application shall be made in <a href="http://transport.karnataka.gov.in/index.php/information/details/forms">form 25</a>. (rule 52 of CMV Rules.)</p>

<p>for details see forms and procedures.</p>

<h1 class="subhead-blue"><u>Necessity of Insurance</u></h1>

<p>No person shall use or cause or allow any other person to use a motor vehicle in public place, unless there is in force a policy of insurance. In case of vehicle being used without valid insurance the owner of the vehicle shall be liable to pay fine (Sec 146)</p>

<p>for details of fines see fines under sec 200</p>

<h1 class="subhead-blue"><u>Duty to produce documents</u></h1>

<p>The Driver of a motor vehicle shall produce the following documents on demand when demande by an police officer in uniform on any officer of the motor vehicles department .</p>

<ol class="numberlist">
	<li>Driving licence</li>
	<li>Tax paid Proof</li>
	<li>Certificate of Registration.</li>
	<li>Certificate of insurance.</li>
	<li>certificate of fitness, Permit in case of Transport vehicle</li>
</ol>

<p>The driving licence, tax paid proof, certificate of registration shall be produced on demand.</p>

<p>If the registered owner or the person in possession of the vehicle at the checking is not in possession of certificates of fitness ,permit and insurance It shall be sufficient if the same are produced within fifteen days from the date of demand. (Sec 130 read with rule 139)</p>

<p>Failure to comply with the above shall be liable to fines under sec 200.</p>

<h1 class="subhead-blue"><u>Disobedience of orders, obstruction and refusal of information</u></h1>

<p>Whoever willfully disobeys any direction lawfully given by a person empowered under this act, causes obstruction in discharge of any function or refuses any information or gives false information shall be punishable with a fine of Rs 500/- or with imprisonment of a term which may extend upto one month or with both. (sec 179)</p>                                </div> 
                     </div>
 
 <div id="social_button" align="center">

        	<h4><u>Contact Details</u></h4>
            <b><p>Commissioner for Transport and Road Safety ,1st floor,TTMC.Building ,Shantinagar, Bengaluru-560027. </p><p> phone : 080-22210994</p> <p>E-mail : transcom@nic.in</p></b>
                <a href="http://www.facebook.com"><img alt="Facebook" src="images/facebook-32x32.png" title="facebook" /></a>
                <a href="#"><img alt="Flickr" src="images/flickr-32x32.png" title="flickr" /></a>
                <a href="#"><img alt="Twitter" src="images/twitter-32x32.png" title="twitter" /></a>
                <a href="#"><img alt="Youtube" src="images/youtube-32x32.png" title="youtube" /></a>
                
</div>	
	
<div id="bar_wrapper">

	<div id="bar">Copyrights @ 2017 <a href="#">Transport Department</a>
    </div>
	
</div>
</body>		
</html>		