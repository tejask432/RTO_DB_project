<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['a_username'])){
$id=$_SESSION['a_id'];
$user=$_SESSION['a_username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin_login.php");
exit();
}
$id=$_GET[id];
$sql="delete from register where id='$id'";
mysql_query($sql);
//$rows=mysql_fetch_assoc($result);
header("location:users.php");
?>


