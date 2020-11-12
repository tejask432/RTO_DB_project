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
$b_id=$_POST['b_id'];
$t_type=$_POST['t_type'];
$t_date=$_POST['t_date'];
$t_result=$_POST['t_result'];

$sql=mysql_query("insert into test1(d_id,b_id,t_type,t_date,t_result) values ('$d_id','$b_id','$t_type','$t_date','$t_result')");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/ll.php");
}
else{
$message1="<font color=red> Failed to add details (chech Driver_id and Branch_id), Try again</font>";
}
}	
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO</title>
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
<h3 align="center">TEST results</h3>

 <div class="tabbed_area">  
       <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View details</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add details</a></li>  			
        </ul>    
          
        <div id="content_1" class="content">  
		<?php  echo $message;
			  echo $message1;
		/*
		View
        Displays all data from 'llr' table
		*/
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $result = mysql_query("SELECT * FROM test1 t ,driver, branch where t.d_id=driver.d_id and t.b_id=branch.b_id")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>DRIVER_ID</th><th>DRIVER_NAME</th><th>BRANCH_ID</th><th>BRANCH_NAME</th><th>TEST_TYPE </th><th>TEST_DATE </th><th>TEST_RESULT</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['d_id'] . '</td>';
				 echo '<td>' . $row['d_name'] . '</td>';
                echo '<td>' . $row['b_id'] . '</td>';
				 echo '<td>' . $row['b_name'] . '</td>';
				echo '<td>' . $row['t_type'] . '</td>';
				echo '<td>' . $row['t_date'] . '</td>';
				echo '<td>' . $row['t_result'] . '</td>';
		}
				  echo "</table>";
				 // close table>
      ?>
       </div>  
<div id="content_2" class="content">  
		          
				   <?php echo $message;
			  echo $message1;
			  ?>
		<form action="ll.php" method="post" >
			<table width="220" height="106" border="0" >	
			    <tr><td align="center"><input name="d_id" type="text" style="width:170px" placeholder="Driver id" required="required" id="Driver" /></td></tr>
				<tr><td align="center"><input name="b_id" type="text" style="width:170px" placeholder="Branch id" required="required" id="branch" /></td></tr>
				<tr><td align="center"><input name="t_type" type="text" style="width:170px" placeholder="Test type" required="required" id="type"/></td></tr>
				<tr><td align="center"><input name="t_date" type="date" style="width:170px"title="test date" required="required" id="d"/></td></tr>
				<tr><td align="center"><input name="t_result" type="text" style="width:170px" placeholder="Result" required="required" id="r"/></td></tr>
				<tr><td align="right"><input name="sub" type="submit" value="Submit"/></td></tr>
            </table>
		</form>
        </div>
		<ol><a href="dl.php" title="Test result">Driver details</a>
		<a href="licence.php" title="Licence">Licence details</a></ol>
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

  