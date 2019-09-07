
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

if(isset($_POST['fp']))
{
	$u=$_POST['txtuname'];
	$e=$_POST['txtemail'];
	$rs=mysql_query("select * from user where u_username='$u' and u_email='$e'");
	$v=mysql_fetch_array($rs);
	$rsc=mysql_query("select * from company where c_username='$u' and c_email='$e'");
	$va=mysql_fetch_array($rsc);
	
	if(mysql_num_rows($rs)>0)
	{	
		$uid=$v['u_id'];
		echo "<script>window.location='resetpassword.php?uid=$uid'</script>";
	}
	else if(mysql_num_rows($rsc)>0)
	{
		$cid=$va['c_id'];
		echo "<script>window.location='resetpassword.php?cid=$cid'</script>";
	}
	else
	{
		echo "<script>window.location='forgotpassword.php?err=1';</script>";
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
                            <label>Username</label>
                            <input type="text" class="le-input" name="txtuname">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Email</label>
                            <input type="text" class="le-input" name="txtemail">
                        </div><!-- /.field-row -->

                       
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="fp">Reset</button><br><br>
							<?php
								if(isset($_GET['err']))
							{
								echo "<table style='color:#FF0000'><tr><td>Sorry, We could not find yor Username/Email!</td></tr></table>";
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