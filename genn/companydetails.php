<?php
session_start();
include_once("connect.php");

?>
<?php
if(!isset($_SESSION['cid']))
{	
		echo "<script>window.location='signin.php';</script>";
}
	$comid=$_SESSION['cid'];
	$rs=mysql_query("select * from company where c_id=$comid");
	$v=mysql_fetch_array($rs);
	$orgname=$v['org_name'];
	$ownername=$v['owner_name'];
	$usernm=$v['c_username'];
	$email=$v['c_email'];
	$mno=$v['c_mno'];
	$city=$v['c_city'];
	$address=$v['c_address'];
	$pin=$v['c_pcode'];
	$clogo=$v['c_icon'];
?>
<!DOCTYPE html>
<html lang="en">
	
<body>
<?php
		include_once("include/companyh.php");
		?>

	<div class="wrapper">
	
<!-- ============================================================= HEADER : END ============================================================= -->		<div id="top-banner-and-menu">
	<div class="container">
	<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
		<div class="tab-pane" id="additional-info">
                    <ul class="tabled-data">
						<li>
							<h2 class="bordered">Company Details</h2>
                      	</li>  
						<li>
                            <label>Organisation Name</label>
                            <div class="value"><?php echo $orgname;?></div>
                        </li>
                        <li>
                            <label>Owner Name</label>
                            <div class="value"><?php echo $ownername;?></div>
                        </li>
                        <li>
                            <label>Username</label>
                            <div class="value"><?php echo $usernm; ?></div>
                        </li>
						<li>
                            <label>Email</label>
                            <div class="value"><?php echo $email; ?></div>
                        </li>
                        <li>
                            <label>Contact No.</label>
                            <div class="value"><?php echo $mno; ?></div>
                        </li>
                        <li>
                            <label>City</label>
                            <div class="value"><?php echo $city; ?></div>
                        </li>
						<li>
                            <label>Address</label>
                            <div class="value"><?php echo $address; ?></div>
                        </li>
						<li>
                            <label>Pincode</label>
                            <div class="value"> <?php echo $pin; ?>
						</li>	
						<li>
                            <div class="value"><a href="companyupdate.php">Click Here to Update Your Details</a></div>
                           
						</li>
						<li>
                            <div class="value"><a href="changepassword.php">Change Password</a></div>
                           
						</li>							
                    </ul>
			</div>
			</div>

	</div><!-- /.container -->
</div><!-- /#	top-banner-and-menu -->	
</div><!-- /.wrapper -->
<?php include_once("include/footer.php") ?>
		<!-- ============================================================= FOOTER ============================================================= -->

<!-- ============================================================= FOOTER : END ============================================================= -->	


	

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
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

	
</body>
</html>