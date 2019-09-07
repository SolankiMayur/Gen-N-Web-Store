
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

if(isset($_POST['login']))
{
	$u=$_POST['txtuname'];
	$p=$_POST['txtpwd'];
	$rs=mysql_query("select * from user where u_username='$u' and u_password='$p'");
	$v=mysql_fetch_array($rs);
	$rsc=mysql_query("select * from company where c_username='$u' and c_password='$p'");
	$va=mysql_fetch_array($rsc);
	$rsa=mysql_query("select * from admin where admin_name='$u' and admin_password='$p'");
	$vaa=mysql_fetch_array($rsa);

	if(mysql_num_rows($rs)>0)
	{	
			$_SESSION['uid']=$v['u_id'];
			$_SESSION['uname']=$v['u_name'];
			if(isset($_GET['ci']))
			{
				echo "<script>window.location='categoryview.php?ci=".$_GET['ci']."'</script>";
			}
			else if(isset($_GET['pid']))
			{
				echo "<script>window.location='productdetails.php?pid=".$_GET['pid']."'</script>";
			}
			else if(isset($_GET['p']))
			{
				echo "<script>window.location='products.php'</script>";
			}
			else
			{
				echo "<script>window.location='index.php'</script>";
			}
	}
	else if(mysql_num_rows($rsc)>0)
	{
		$_SESSION['cid']=$va['c_id'];
		$_SESSION['cname']=$va['org_name'];
		$_SESSION['oname']=$va['owner_name'];
		echo "<script>window.location='companydetails.php'</script>";
	}
	else if(mysql_num_rows($rsa)>0)
	{	
		$_SESSION['aid']=$vaa['admin_id'];
		$_SESSION['aname']=$vaa['admin_name'];
		echo "<script>window.location='admin/adminhome.php';</script>";
	}
	else
	{
		echo "<script>window.location='signin.php?err=1';</script>";
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
					<h2 class="bordered">Sign In</h2>
					<p>Hello, Sign In To Your Account!</p>

					

					<form role="form" class="login-form cf-style-1" method="post" name="login">
						<div class="field-row">
                            <label>Username</label>
                            <input type="text" class="le-input" name="txtuname">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Password</label>
                            <input type="password" class="le-input" name="txtpwd">
                        </div><!-- /.field-row -->

                        <div class="field-row clearfix">
                        	<span class="pull-right">
                        		<a href="signup.php" class="content-color bold">New User</a>
                        	</span>
							</div>
							<div class="field-row clearfix">
                        	<span class="pull-right">
                        		<a href="forgotpassword.php" class="content-color bold">Forgotten Password ?</a>
                        	</span>
                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="login">Sign In</button><br><br>
							<?php
								if(isset($_GET['err']))
							{
								echo "<table style='color:#FF0000'><tr><td>Sorry, You have entered incorrect username/password !</td></tr></table>";
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
	<script type="text/javascript" src="assets/js/valid.js"></script>

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