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
$id=$_GET[b_id];
$sql="delete from branch where b_id='$id'";
mysql_query($sql);
//$rows=mysql_fetch_assoc($result);
header("location:rto_b.php");
?>


