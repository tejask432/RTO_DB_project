<?php
session_start();
unset($_SESSION['a_username']);
unset($_SESSION['username']);
unset($_SESSION["id"]);
unset($_SESSION["a_id"]);
session_destroy(1);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
?>