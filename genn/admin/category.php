<?php
session_start();
include_once("../connect.php");
	if(!isset($_SESSION['aid']))
	{
		echo "<script>window.location='login.php';</script>";
	}
	if(isset($_GET['addcat']))
	{
		$catname=$_GET['txtcat'];
		$c=mysql_query("insert into category (cat_name) values ('$catname')");
		if($c)
		{
			echo "<script>alert('Category Added Successfully!');</script>";
		}
	}
	if(isset($_GET['delcat']))
	{
		$delcat=$_GET["delcat"];
		$q=mysql_query("delete from category where cat_id=$delcat");
		if($q)
		{
			echo "<script>alert('Category Deleted Succesfully!');</script>";
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

	    <!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		
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
		<h2 class="bordered">Categories</h2>
		<div class="tab-pane" id="additional-info">
			<form name="addcat" method="get" action="category.php" class="login-form cf-style-1">
			<div >
                            <label>Add Category :</label>
                            <input type="text"  name="txtcat">
							<button type="submit" class="le-button" name="addcat">Add</button>
            </div>
			</form>
                   <br><br>
					<?php 
						echo "<table border=0 class=table><tr><th>Category Name</th><th>Delete Category</th></tr>";
						$rs=mysql_query("select * from category");
						while($v=mysql_fetch_array($rs))
						{
							echo "<tr><td>".$v['cat_name']."</td><td><a href=category.php?delcat=".$v['cat_id'].">Delete</a></td></tr>";
						}
							echo"</table>";
					?>
                    
			</div>
			</div>

	

</div>
</div>
	
	<?php include_once('../include/footer.php'); ?>
	

	

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="../assets/js/jquery-1.10.2.min.js"></script>
	<script src="../assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
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

	<script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>