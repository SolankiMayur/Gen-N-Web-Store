<?php
session_start();
$_SESSION['uid']="";
unset($_SESSION['uid']);
unset($_SESSION['uname']);
echo"<script>window.location='index.php'</script>";
?>