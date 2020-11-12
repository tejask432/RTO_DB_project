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
$b_name=$_POST['b_name'];
$b_address=$_POST['b_address'];
$b_pin=$_POST['b_pin'];
$b_phone=$_POST['b_phone'];
$sql1=mysql_query("SELECT * FROM branch WHERE b_name='$b_name'")or die(mysql_error());
 $result=mysql_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the Branch name entered already exists</font>";
 }else{
$sql=mysql_query("insert into branch(b_name,b_address,b_pin,b_phone) values ('$b_name','$b_address','$b_pin','$b_phone')");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/rto_b.php");
}else{
$message1="<font color=red> Failed to add details, Try again</font>";
}
	}}
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO-Branch</title>
<link href="css/style.css"  type="text/css" rel="stylesheet"/>
<script src="js/function.js" type="text/javascript"></script>
<script>
function validateForm()
{

//for alphabet characters only
var str=document.form1.b_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("Branch name Cannot Contain Numerical Values");
	document.form1.b_name.value="";
	document.form1.b_name.focus();
	return false;
	}}
	
if(document.form1.b_address.value=="")
{
alert("Address Field is Empty");
return false;
}



if(document.form1.b_pin.value=="")
{
alert("pincode Field is Empty");
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
<h3 align="center">Branch details</h3>

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
        Displays all data from  table
		*/
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $result = mysql_query("SELECT * FROM branch")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Branch ID</th><th>Branch Name </th><th>Branch Address</th><th>Branch Pincode </th><th>Phone</th><th>delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['b_id'] . '</td>';
				 echo '<td>' . $row['b_name'] . '</td>';
				  echo '<td>' . $row['b_address'] . '</td>';
                echo '<td>' . $row['b_pin'] . '</td>';
				echo '<td>' . $row['b_phone'] . '</td>';
				?>
				<td><a href="delete_branch.php?b_id=<?php echo $row['b_id']?>"><img src="images/delete-icon.jpg" width="35" height="35" border="0" /></a></td>
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
		<form name="form1" onsubmit="return validateForm(this);" action="rto_b.php" method="post" >
			<table width="220" height="106" border="0" >	
			    <tr><td align="center"><input name="b_name" type="text" style="width:170px" placeholder="Branch name" required="required" id="Branch name" /></td></tr>
				<tr><td align="center"><input name="b_address" type="text" style="width:170px" placeholder="Branch Address" required="required" id="Branch Address" /></td></tr> 
				<tr><td align="center"><input name="b_pin" type="text" style="width:170px" placeholder="Pincode" required="required" id="pincode"/></td></tr>
				<tr><td align="center"><input name="b_phone" type="text" style="width:170px" placeholder="phone" required="required" id="phone"/></td></tr>
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

	<div id="bar">Copyrights @ 2017 <a href="http://transport.karnataka.gov.in/">Transport Department</a>
    </div>
</div>
</body>		
</html>		

  