<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['id'];
$username=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
if(isset($_POST['sub'])){
$d_id=$_POST['d_id'];
$l_no=$_POST['l_no'];
$l_class=$_POST['l_class'];
$issue_d=$_POST['issue_d'];
$expiry_d=$_POST['expiry_d'];
  
$sql1=mysql_query("SELECT * FROM licence WHERE l_no='$l_no'")or die(mysql_error());
 $result=mysql_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the Details entered already exists</font>";
 }
 else{
$sql=mysql_query("insert into licence ( l_no, l_class, issue_d, expiry_d,d_id) values ('$l_no', '$l_class','$issue_d', '$expiry_d','$d_id')");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/licence.php");
}
else{
$message1="<font color=red> Failed to add details or driver id does not exist, Try again</font>";
}
}
}	
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-licence Registration</title>
<link href="css/style.css"  type="text/css" rel="stylesheet"/>
<script src="js/function.js" type="text/javascript"></script>
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
<h3 align="center">Licence details</h3>

 <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View details</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add details</a></li>  
              
        </ul>  
          
        <div id="content_1" class="content">  
		<?php  echo $message;
			  echo $message1; echo $message2;
		/*
		View
        Displays all data from  table
		*/
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $result = mysql_query("SELECT * FROM licence l,driver d where l.d_id=d.d_id")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Licence NO</th><th>licence class</th><th>Licence holder</th> <th>Issue date</th><th>Expiry Date</th><th>Address</th><th>delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
				 echo '<td>' . $row['l_no'] . '</td>';
				  echo '<td>' . $row['l_class'] . '</td>';
				  echo '<td>' . $row['d_name'] . '</td>';
				 echo '<td>' . $row['issue_d'] . '</td>';
				  echo '<td>' . $row['expiry_d'] . '</td>';
				    echo '<td>' . $row['d_address'] . '</td>';
				?>
				<td><a href="delete_licence.php?l_no=<?php echo $row['l_no']?>"><img src="images/delete-icon.jpg" width="35" height="35" border="0" /></a></td>
		<?php
		}
        // close table>
        echo "</table>";
?> 
        </div>  
        <div id="content_2" class="content">  
		          
				   <?php echo $message;
			  echo $message1;
			  ?>
		<form action="licence.php" method="post" >
			<table width="220" height="106" border="0" >	
			    <tr><td align="center"><input name="d_id" type="text" style="width:170px" placeholder="Driver id" required="required" id="d_id" /></td></tr>
				<tr><td align="center"><input name="l_no" type="text" style="width:170px" placeholder="Licence no" required="required" id="d_id" /></td></tr>
				<tr><td align="center"><input name="l_class" type="text" style="width:170px" placeholder="Licence_class" required="required" id="l_c"/></td></tr>
				<tr><td align="center"><input name="issue_d" type="date" style="width:170px" title="Issue date" required="required" id="i_d"/></td></tr>
				<tr><td align="center"><input name="expiry_d" type="date" style="width:170px" title="Expiry date"required="required" id="reg_d"/></td></tr>
				<tr><td align="right"><input name="sub" type="submit" value="Submit"/></td></tr>
            </table>
		</form>
        </div>
		<ol><a href="dl.php" title="DL">Driver details</a></ol>
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

	<div id="bar">Copyrights @ 2017 <a href="http://transport.karnataka.gov.in/">Transport Department</a></div>
</div>
</body>		
</html>		

  