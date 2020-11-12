<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
$r_no=$_GET[r_no];
$sql="delete from vehicle where r_no='$r_no'";
mysql_query($sql);
//$rows=mysql_fetch_assoc($result);
header("location:vr.php");
?>


