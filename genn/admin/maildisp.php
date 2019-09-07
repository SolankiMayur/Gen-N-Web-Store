<?php
session_start();
include_once("../connect.php");
	if(!isset($_SESSION['aid']))
	{
		echo "<script>window.location='login.php';</script>";
	}
	if(isset($_GET['delid']))
	{
		$del=$_GET["delid"];
		$q=mysql_query("delete from contact where id=$del");
		if($q)
		{
			echo "<script>alert('Message Deleted Succesfully!')</script>;";
			echo "<script>window.location='mails.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Gen-N WebStore</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="../assets/css/main.css">
	    <link rel="stylesheet" href="../assets/css/green.css">
	    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
		<link rel="stylesheet" href="../assets/css/owl.transitions.css">
		<link rel="stylesheet" href="../assets/css/animate.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="../assets/css/config.css">

		<link href="../assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="../assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="../assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="../assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="../assets/css/navy.css" rel="alternate stylesheet" title="Navy color">
		<link href="../assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

	   
		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="../assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

 
	</head>
<body>
<?php
{	
		include_once("adminh.php");
}
?>
<div class="wrapper">
	
<div id="top-banner-and-menu">
	<div class="container">
		<section class="section sign-in inner-right-xs">
		<h2 class="bordered">Mail Display</h2>
			<div class="tab-pane" id="additional-info">
                   
					<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
		<div class="tab-pane" id="additional-info">
					<?php 
						$id=$_GET['mid'];
						$rs=mysql_query("select * from contact where id=$id");
						$v=mysql_fetch_array($rs);	
					?>
                    <ul class="tabled-data">
                        <li>
                            <label>Name</label>
                            <div class="value"><?php echo $v['name'] ; ?></div>
                        </li>
                        <li>
                            <label>Username</label>
                            <div class="value"><?php echo $v['user'] ; ?></div>
                        </li>
                        <li>
                            <label>Email</label>
                            <div class="value"><?php echo $v['email'] ; ?></div>
                        </li>
                        <li>
                            <label>User Type</label>
                            <div class="value"><?php echo $v['user_type'] ; ?></div>
                        </li>
                        <li>
                            <label>Subject</label>
                            <div class="value"><?php echo $v['subject'] ; ?></div>
                        </li>
						<li>
                            <label>Message</label>
                         <div class="value"><p><?php echo $v['message'] ; ?></p></div>
                        	</li>
						<li>
                            <div class="value"><?php echo "<a href=maildisp.php?delid=".$v['id'].">Delete Message</a></div>"; ?>
                           
						</li>						
                    </ul>
			</div>
			</div>
                    
			</div>
			</div>

	

</div>
</div>
	
	<?php include_once('../include/footer.php'); ?>
	

	

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="../assets/js/jquery-1.10.2.min.js"></script>
	<script src="../assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	
	<script src="../assets/js/gmap3.min.js"></script>
	<script src="../assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/css_browser_selector.min.js"></script>
	<script src="../assets/js/echo.min.js"></script>
	<script src="../assets/js/jquery.easing-1.3.min.js"></script>
	<script src="../assets/js/bootstrap-slider.min.js"></script>
    <script src="../assets/js/jquery.raty.min.js"></script>
    <script src="../assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="../assets/js/jquery.customSelect.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
	<script src="../assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="../switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>