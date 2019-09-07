<?php
session_start();
include_once("connect.php");
?>
<?php
if(!isset($_SESSION['uid']) && !isset($_SESSION['cid']))
{	
		echo "<script>window.location='signin.php';</script>";
}
if(isset($_SESSION['uid']))
{		
		
		$u=$_SESSION['uid'];
		include_once("include/userh.php");
		$type="User";
}
else
{		
		$u=$_SESSION['cid'];
		include_once("include/companyh.php");
		$type="Company";
}

?>
<!DOCTYPE html>
<html lang="en">
	
<body>
	 	<div class="wrapper">
		<div id="top-banner-and-menu">
	<div class="container">
		
		<?php
	
	if(isset($_POST['msg']))
	{	
		if($type=="User")
		{
			$userid=$_SESSION['uid'];
			$rs=mysql_query("select * from user where u_id=$userid");
			$v=mysql_fetch_array($rs);
			$username=$v['u_name'];
			$usernm=$v['u_username'];
			$email=$v['u_email'];
			$subject=$_POST['txtsub'];
			$message=$_POST['txtmsg'];
			$q=mysql_query("insert into contact(user_type,name,user,subject,message,email)							values('$type','$username','$usernm','$subject','$message','$email')");
			if($q)
				{
					echo "<script>alert('Messsage Sent Successfully!');</script>";
				}
		}
		if($type=="Company")
		{
			$comid=$_SESSION['cid'];
			$rs=mysql_query("select * from company where c_id=$comid");
			$v=mysql_fetch_array($rs);
			$username=$v['c_username'];
			$ownername=$v['owner_name'];
			$email=$v['c_email'];
			$subject=$_POST['txtsub'];
			$message=$_POST['txtmsg'];
			$q=mysql_query("insert into contact(user_type,name,user,subject,message,email)							values('$type','$ownername','$username','$subject','$message','$email')");
			if($q)
				{
					echo "<script>alert('Messsage Sent Successfully!');</script>";
				}
		}
		
	
	}
	?>

		<div class="col-md-6">
			<!-- ========================================== SECTION – HERO ========================================= -->
			
<section class="section leave-a-message">
					<h2 class="bordered">Leave a Message</h2>
					<p>Your valuable message will be reviewed by our webstore administrator and we will get back to you soon on your email</p>
					<form id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post" action="contact.php">                        
                        <div class="field-row">
                            <label>Subject</label>
                            <input type="text" class="le-input" name="txtsub">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Your Message</label>
                            <textarea rows="8" class="le-input" name="txtmsg"></textarea>
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="msg">Send Message</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.contact-form -->
				</section>
	</div><!-- /.homebanner-holder -->

	</div><!-- /.container -->
</div>
</div>
<?php
	include_once("include/footer.php");
?>
	
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