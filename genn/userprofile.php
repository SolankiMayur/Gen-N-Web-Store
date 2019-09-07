<?php
session_start();
include_once("connect.php");

?>
<?php
if(!isset($_SESSION['uid']))
{	
		echo "<script>window.location='signin.php';</script>";
}
	$userid=$_SESSION['uid'];
	$rs=mysql_query("select * from user where u_id=$userid");
	$v=mysql_fetch_array($rs);
	$username=$v['u_name'];
	$usernm=$v['u_username'];
	$email=$v['u_email'];
	$mno=$v['u_mno'];
	$city=$v['u_city'];
	$address=$v['u_address'];
	$pin=$v['u_pcode'];	
?>
<!DOCTYPE html>
<html lang="en">
	
<body>
<?php
		include_once("include/userh.php");
		?>

	<div class="wrapper">
	
<!-- ============================================================= HEADER : END ============================================================= -->		<div id="top-banner-and-menu">
	<div class="container">
		
		<?php
	include_once("include/categories.php");
	?>
	
	
	<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
	 <h2 class="section-title" align="center">Profile</h2>
		<div class="tab-pane" id="additional-info">
                    <ul class="tabled-data">
                        <li>
                            <label>Name</label>
                            <div class="value"><?php echo $username ; ?></div>
                        </li>
                        <li>
                            <label>Username</label>
                            <div class="value"><?php echo $usernm ; ?></div>
                        </li>
                        <li>
                            <label>Email</label>
                            <div class="value"><?php echo $email ; ?></div>
                        </li>
                        <li>
                            <label>Contact No.</label>
                            <div class="value"><?php echo $mno ; ?></div>
                        </li>
                        <li>
                            <label>City</label>
                            <div class="value"><?php echo $city ; ?></div>
                        </li>
						<li>
                            <label>Address</label>
                            <div class="value"><?php echo $address ; ?></div>
                        </li>
						<li>
                            <label>Pincode</label>
                            <div class="value"> <?php echo $pin ; ?>
						</li>	
						<li>
                            <div class="value"><a href="userupdate.php">Click Here to Update Your Details</a></div>
                           
						</li>
						<li>
                            <div class="value"><a href="changepassword.php">Change Password</a></div>
                           
						</li>							
                    </ul>
			</div>
			</div>

	</div><!-- /.container -->
</div><!-- /#	top-banner-and-menu -->	
<!-- ========================================= SECTION � HERO : END ========================================= -->			
		
<?php	include_once("include/newarrival.php"); ?>



<?php include_once("include/footer.php") ?>
		<!-- ============================================================= FOOTER ============================================================= -->

<!-- ============================================================= FOOTER : END ============================================================= -->	
</div><!-- /.wrapper -->

	

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

	<!-- For demo purposes � can be removed on production -->
	
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
	<!-- For demo purposes � can be removed on production : End -->

	<script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>