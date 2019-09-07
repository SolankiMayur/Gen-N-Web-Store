
<?php
session_start();
include_once("connect.php");
if(isset($_SESSION['uid']))
{	
		echo "<script>window.location='index.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
	
<body>
	
	<div class="wrapper">
	
	<?php

include_once("include/visitorh.php");

if(isset($_GET['uid']))
{
	$u=$_GET['uid'];
	if(isset($_POST['fp']))
	{
			$pwd=$_POST['txtpass'];
			$cpwd=$_POST['txtcpass'];
			if($pwd == $cpwd)
			{
				
				$q=mysql_query("update user set u_password = $pwd where u_id=$u");
				if($q)
				{
					echo "<script>alert('Password reset successful! /n Please login with new password!');</script>";
					echo "<script>window.location='signin.php';</script>";
				}
			}
			else
			{
				echo "<script>window.location='resetpassword.php?err=1&uid=$u';</script>";
			}
	}
}
if(isset($_GET['cid']))
{
	$c=$_GET['cid'];
	if(isset($_POST['fp']))
	{
			$pwd=$_POST['txtpass'];
			$cpwd=$_POST['txtcpass'];
			if($pwd == $cpwd)
			{
				$q=mysql_query("update company set c_password = $pwd where c_id=$c");
				if($q)
				{
					echo "<script>alert('Password reset successful! \\n Please login with new password!');</script>";
					echo "<script>window.location='signin.php';</script>";
				}
			}
			else
			{
				echo "<script>window.location='resetpassword.php?err=1&cid=$c';</script>";
			}
	}
}
?>
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->

<!-- ============================================================= HEADER : END ============================================================= -->	
<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Reset Password</h2>
					<p>Hello! Reset Your Password!</p>

					

					<form role="form" class="login-form cf-style-1" method="post" vi>
						<div class="field-row">
                            <label>Password</label>
                            <input type="password" class="le-input" name="txtpass">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Confirm Password</label>
                            <input type="password" class="le-input" name="txtcpass">
                        </div><!-- /.field-row -->

                       
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="fp">Reset</button><br><br>
							<?php
								if(isset($_GET['err']))
							{
								echo "<table style='color:#FF0000'><tr><td>Sorry, Password did not matched!</td></tr></table>";
							}
?>
                        </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div>

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->


<?php include_once('include/footer.php'); ?>

	

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/css_browser_selector.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.raty.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="assets/js/jquery.customSelect.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
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