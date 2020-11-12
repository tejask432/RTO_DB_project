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
$d_name=$_POST['d_name'];
$d_gender=$_POST['d_gender'];
$d_dob=$_POST['d_dob'];
$d_phone=$_POST['d_phone'];
$d_address=$_POST['d_address'];
$sql1=mysql_query("SELECT * FROM driver WHERE d_name='$d_name'")or die(mysql_error());
 $result=mysql_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the driver name entered already exists</font>";
 }else{
$sql=mysql_query("insert into driver(d_name,d_gender,d_dob,d_phone,d_address) values ('$d_name','$d_gender','$d_dob','$d_phone','$d_address')");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/dl.php");
}else{
$message1="<font color=red> Failed to add details, Try again</font>";
}
	}}
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-DL</title>
<link href="css/style.css"  type="text/css" rel="stylesheet"/>
<script src="js/function.js" type="text/javascript"></script>
<script>
function validateForm()
{

//for alphabet characters only
var str=document.form1.d_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert(" name Cannot Contain Numerical Values");
	document.form1.d_name.value="";
	document.form1.d_name.focus();
	return false;
	}}
	
if(document.form1.d_address.value=="")
{
alert("Address Field is Empty");
return false;
}



if(document.form1.d_gender.value=="")
{
alert("gender Field is Empty");
return false;
}

}

</script></head>
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
<h3 align="center">Drivers details</h3>

 <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View details</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add Driver details</a></li>  			
        </ul>  
        <div id="content_1" class="content">  
		<?php  echo $message;
			  echo $message1;
		/*
		View
        Displays all data from  table
		*/
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $result = mysql_query("select * from driver")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Sl no.</th><th>Driver Name </th> <th>Gender</th><th>Driver DOB</th><th>Driver Address</th><th>Driver Phone</th><th>delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['d_id'] . '</td>';
				 echo '<td>' . $row['d_name'] . '</td>';
                echo '<td>' . $row['d_gender'] . '</td>';
				echo '<td>' . $row['d_dob'] . '</td>';
				  echo '<td>' . $row['d_address'] . '</td>';
				  echo '<td>' . $row['d_phone'] . '</td>';
				?>
				<td><a href="delete_driver.php?d_id=<?php echo $row['d_id']?>"><img src="images/delete-icon.jpg" width="35" height="35" border="0" /></a></td>
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
		<form name="form1" onsubmit="return validateForm(this);" action="dl.php" method="post" >
			<table width="220" height="106" border="0" >	
			    <tr><td align="center"><input name="d_name" type="text" style="width:170px" placeholder="Driver name" required="required" id="Driver name" /></td></tr>
				<tr><td align="center"><input name="d_gender" type="text" style="width:170px" placeholder="Gender" required="required" id="gender"/></td></tr>
				<tr><td align="center"><input name="d_dob" type="date" style="width:170px" placeholder="DOB" required="required" id="d_dob"/></td></tr>
				<tr><td align="center"><input name="d_phone" type="text" style="width:170px" placeholder="phone" required="required" id="phone"/></td></tr>
				<tr><td align="center"><input name="d_address" type="text" style="width:170px" placeholder="Driver Address" required="required" id="Driver Address" /></td></tr> 
				<tr><td align="right"><input name="sub" type="submit" value="Submit"/></td></tr>
            </table>
		</form>
        </div>
		<ol><a href="ll.php" title="Test result">Test details</a>
		<a href="licence.php" title="Licence">Licence details</a></ol>
		
		 <div id="content_3" class="content">  
		          
		<form name="form1" onsubmit="return validateForm(this);" action="dl.php" method="post" >
			<table width="220" height="106" border="0" >	
			    <tr><td align="center"><input name="d_id" type="text" style="width:170px" placeholder="Driver id" required="required" id="Driver id" /></td></tr>
				<tr><td align="center"><input name="b_id" type="text" style="width:170px" placeholder="Branch id" required="required" id="Branch id"/></td></tr>
				<tr><td align="center"><input name="type_t" type="date" style="width:170px" placeholder="Test type" required="required" id="type_t"/></td></tr>
				<tr><td align="center"><input name="t_date" type="text" style="width:170px" placeholder="Test date" required="required" id="t_date"/></td></tr>
				<tr><td align="center"><input name="t_result" type="text" style="width:170px" placeholder="Test result" required="required" id="Result" /></td></tr> 
				<tr><td align="right"><input name="sub" type="submit" value="Submit"/></td></tr>
            </table>
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

  