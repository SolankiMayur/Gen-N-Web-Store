<?php
session_start();
include_once("../connect.php");
	if(!isset($_SESSION['aid']))
	{
		echo "<script>window.location='login.php';</script>";
	}
	if(isset($_POST['addslider']))
	{
		$catnm=$_POST['cat'];
		$rs=mysql_query("select * from category where cat_name='$catnm'");
		$vs=mysql_fetch_array($rs);
		$catid=$vs['cat_id'];
		$s=mysql_query("select * from slider where cat_id=$catid");
		if(mysql_num_rows($s)>0)
		{
			$c=mysql_query("update slider set slider_image='".$_FILES['simage']['name']."' where cat_id=$catid");
			if($c)
			{
				if(move_uploaded_file($_FILES['simage']['tmp_name'],"../assets/images/sliders/".$_FILES['simage']['name']))
				{	
				}
				echo "<script>alert('Slider Updated Succesfully!')</script>";
			}	
		}
		else
		{
			$c=mysql_query("insert into slider (cat_id,slider_image) values($catid,'".$_FILES['simage']['name']."')");
			if($c)
			{
				if(move_uploaded_file($_FILES['simage']['tmp_name'],"../assets/images/sliders/".$_FILES['simage']['name']))
				{	
				}
				echo "<script>alert('Slider Added Succesfully!')</script>";
			}	
		}
	}
	if(isset($_GET['delslider']))
	{
		$dels=$_GET["delslider"];
		$q=mysql_query("delete from slider where slider_id=$dels");
		if($q)
		{
			echo "<script>alert('Slider Deleted Succesfully!')</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<script language="javascript">
	function getupload()
	{
		
	}
	</script>
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
		<div class="col-md-6">
		<section class="section sign-in inner-right-xs">
		<h2 class="bordered">Slider</h2>
			<form name="addcat" method="post" action="slider.php" class="login-form cf-style-1" enctype="multipart/form-data">
			<div>
                            <label>Slider :</label>
                           <div class="field-row">
							<select name="cat" onChange="getupload();">
							<?php
								$rsc=mysql_query("select * from category");
								while($v=mysql_fetch_array($rsc))
								{	
								echo "<option id=".$v['cat_id']."value=".$v['cat_id'].">".$v['cat_name']."</option>";
								}
							?>
							</select>
							</div>
							<div class="field-row">
							<input type="file" class="le-input" name="simage">
							</div>
							<div class="field-row">
							<button type="submit" class="le-button" name="addslider">Update</button>
							</div>
							
							</form>
            </div>
			<div class="tab-pane" id="additional-info">
                   
					<?php 
						echo "<table border=0 class=table><tr><th>Category</th><th>Image</th><th>Delete</th></tr>";
						$rss=mysql_query("select * from slider");
						while($vc=mysql_fetch_array($rss))
						{
							$ct=$vc['cat_id'];
							$rsct=mysql_query("select * from category where cat_id=$ct");
							$vct=mysql_fetch_array($rsct);
							echo "<tr><td>".$vct['cat_name']."</td><td>".$vc['slider_image']."</td><td><a href=slider.php?delslider=".$vc['slider_id'].">Delete</a></td></tr>";
						}
							echo"</table>";
					?>
                    
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