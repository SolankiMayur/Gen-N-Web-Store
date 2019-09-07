<?php
session_start();
include_once("connect.php");
$rs=mysql_query("select * from slider");

?>
<!DOCTYPE html>
<html lang="en">

	<body>
<?php
if(isset($_SESSION['aid']))
{
	echo "<script>window.location='admin/adminhome.php';</script>";
}
if(isset($_SESSION['uid']))
{	
		include_once("include/userh.php");
}
else
{	
		include_once("include/visitorh.php");
}
?>

	<div class="wrapper">
	
<!-- ============================================================= HEADER : END ============================================================= -->		<div id="top-banner-and-menu">
	<div class="container">
		
		<?php
	include_once("include/categories.php");
	?>

		<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->
		
<div id="hero">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
	<?php	while($v=mysql_fetch_array($rs))
		{
		echo "<div class='item' style=' background-image: url(assets/images/sliders/".$v['slider_image'].")';>
			<div class='container-fluid'>
				<div class='caption vertical-center text-left'>		
					<div class=button-holder fadeInDown-3>
						<a href='categoryview.php?ci=".$v['cat_id']."' class='big le-button'>View Products</a>
					</div>
				</div>
			</div>
		</div>";
		}
	?>
	</div><!-- /.owl-carousel -->
</div>
	</div><!-- /.homebanner-holder -->

	</div><!-- /.container -->
</div><!-- /#	top-banner-and-menu -->	
<!-- ========================================= SECTION – HERO : END ========================================= -->			
</div><!-- /.wrapper -->
</div><!-- /.wrapper -->
		
<?php	include_once("include/newarrival.php"); ?>
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

	

</body>
</html>