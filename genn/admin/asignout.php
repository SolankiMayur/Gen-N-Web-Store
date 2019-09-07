<?php
session_start();
$_SESSION['aid']="";
unset($_SESSION['aid']);
unset($_SESSION['aname']);
echo"<script>window.location='../index.php'</script>";
?>