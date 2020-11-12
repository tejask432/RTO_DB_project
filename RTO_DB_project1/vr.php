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
$b_id=$_POST['b_id'];
$r_no=$_POST['r_no'];
$class_v=$_POST['class_v'];
$type_v=$_POST['type_v'];
$engine_no=$_POST['engine_no'];
$reg_d=$_POST['reg_d'];
$chasis_no=$_POST['chasis_no'];
  
$sql1=mysql_query("SELECT * FROM vehicle WHERE r_no='$r_no'")or die(mysql_error());
 $result=mysql_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the Details entered already exists</font>";
 }
 else{
$sql=mysql_query("insert into vehicle ( r_no, class_v, type_v, engine_no, reg_date, chasis_no,b_id) values ('$r_no', '$class_v', '$type_v', '$engine_no', '$reg_d', '$chasis_no','$b_id')");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/vr.php");
}
else{
$message1="<font color=red> Failed to add details or branch id does not exist, Try again</font>";
}
}
}	
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-Vehicle Registration</title>
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
<h3 align="center">Vehicle details</h3>

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
       $result = mysql_query("SELECT * FROM vehicle v,branch b where v.b_id=b.b_id")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Registration NO</th><th>Registed Branch</th> <th>Class of Vehicle</th> <th>Type of Vehicle</th><th>Engine NO</th><th>REG_Date</th><th>Chasis No</th><th>delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
				 echo '<td>' . $row['r_no'] . '</td>';
				  echo '<td>' . $row['b_name'] . '</td>';
                echo '<td>' . $row['class_v'] . '</td>';
				echo '<td>' . $row['type_v'] . '</td>';
				echo '<td>' . $row['engine_no'] . '</td>';
				 echo '<td>' . $row['reg_date'] . '</td>';
				  echo '<td>' . $row['chasis_no'] . '</td>';
				  
				?>
				<td><a href="delete_vehicle.php?r_no=<?php echo $row['r_no']?>"><img src="images/delete-icon.jpg" width="35" height="35" border="0" /></a></td>
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
		<form action="vr.php" method="post" >
			<table width="220" height="106" border="0" >	
			    <tr><td align="center"><input name="b_id" type="text" style="width:170px" placeholder="Branch id" required="required" id="b_name" /></td></tr>
				<tr><td align="center"><input name="r_no" type="text" style="width:170px" placeholder="Registration No" required="required" id="r_no"/></td></tr>
				<tr><td align="center"><input name="class_v" type="text" style="width:170px" placeholder="class of vechicle" required="required" id="class_v"/></td></tr>
				<tr><td align="center"><input name="type_v" type="text" style="width:170px" placeholder="Type of Vechicle" required="required" id="type_v"/></td></tr>
				<tr><td align="center"><input name="engine_no" type="text" style="width:170px" placeholder="Engine No" required="required" id="engine no"/></td></tr>
				<tr><td align="center"><input name="reg_d" type="date" style="width:170px"required="required" id="reg_d"/></td></tr>
				<tr><td align="center"><input name="chasis_no" type="text" style="width:170px" placeholder="Chasis No" required="required" id="chasis No" /></td></tr> 
				<tr><td align="right"><input name="sub" type="submit" value="Submit"/></td></tr>
            </table>
		</form>
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

	<div id="bar">Copyrights @ 2017 <a href="http://transport.karnataka.gov.in/">Transport Department</a></div>
</div>
</body>		
</html>		

  