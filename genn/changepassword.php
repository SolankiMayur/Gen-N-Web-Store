<?php
	session_start();
	if(!isset($_SESSION['uid']) && !isset($_SESSION['cid']))
	{
		echo "<script>window.location='login.php';</script>";
	}
	include_once("connect.php");
	if(isset($_SESSION['uid']))
	{
		include_once("include/userh.php");
		$u=$_SESSION['uid'];
		$rs=mysql_query("select * from user where u_id='$u'");
		$v=mysql_fetch_array($rs);
		$oldpass=$v['u_password'];
		if(isset($_POST['reguser']))
		{	
			if($oldpass==$_POST['opassword'] && $_POST['npassword']==$_POST['cpassword'] )
				{
				$q="update user set u_password='$_POST[npassword]' where u_id=$u";
				if(mysql_query($q))
					{
						echo "<script>
						alert('Password Changed Successfully.');
						window.location='userprofile.php';
						</script>";
					}
				}
				else
				{
						echo "<script>
						alert('Incorrect Password!');
						window.location='changepassword.php';
						</script>";
				}
		}
	}
	if(isset($_SESSION['cid']))
	{
		include_once("include/companyh.php");
		$u=$_SESSION['cid'];
		$rs=mysql_query("select * from company where c_id='$u'");
		$v=mysql_fetch_array($rs);
		$oldpass=$v['c_password'];
		if(isset($_POST['reguser']))
		{	
			if($oldpass==$_POST['opassword'] && $_POST['npassword']==$_POST['cpassword'] )
				{
				$q="update company set c_password='$_POST[npassword]' where c_id=$u";
				if(mysql_query($q))
					{
						echo "<script>
						alert('Password Changed Successfully.');
						window.location='companydetails.php';
						</script>";
					}
				}
				else
				{
						echo "<script>
						alert('Incorrect old password!');
						window.location='changepassword.php';
						</script>";
				}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	
<body>
	
	<div class="wrapper">
	
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->

<!-- ============================================================= HEADER : END ============================================================= -->	
<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<!-- /.col -->

			<div class="col-md-6" >
				<section class="section sign-in inner-right-xs">
				<h2 class="bordered">Update Your Password</h2>
					
					
						
                            <label>Change Password : </label>
					
					<form role="form" class="register-form cf-style-1" name="passform" id="userform" method="post" 
					onSubmit="return pass_validation(this.npassword,this.cpassword)">
						<div class="field-row">
                            <label>Old Password</label>
                            <input type="password" class="le-input" name="opassword">
                        </div>
						<div class="field-row">
                            <label>New Password</label>
                            <input type="password" class="le-input" name="npassword">
                        </div>
						<div class="field-row">
                            <label>Confirm Password</label>
                            <input type="password" class="le-input" name="cpassword">
                        </div>
						
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="reguser">Update</button>
                        </div><!-- /.buttons-holder -->
					</form>
					

				</section><!-- /.register -->
		
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->

	</div>				
					
					
<!-- ========================================= MAIN : END ========================================= -->



	<?php
		include_once('include/footer.php');
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
	<script type="text/javascript" src="assets/js/valid.js"></script>
	

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		function checkType(s1,s2)
		{
				document.getElementById("comform").style.display=s1;
				document.getElementById("userform").style.display=s2;
		}
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