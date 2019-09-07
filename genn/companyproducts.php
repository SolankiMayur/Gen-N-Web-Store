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
	$rs=mysql_query("select * from product where c_id=$comid");
	
	if(isset($_GET['delid']))
	{
		$delproduct=$_GET["delid"];
		$q=mysql_query("delete from product where p_id=$delproduct");
		if($q)
		{
			echo "<script>alert('Product Deleted Successfully!')</script>;";
			echo "<script>window.location='companyproducts.php';</script>";
		}
	}
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
		 <div class="tab-content">
            <div id="grid-view" class="products-grid fade tab-pane in active">
		<section class="section sign-in inner-right-xs">
		<h2 class="bordered">Your Products</h2>
			<div class="tab-pane" id="additional-info">
                    
                 <?php 
					
						if(mysql_num_rows($rs)>0)
							{
								echo "<table border=0 class=table><tr><th>Product</th><th>Price</th><th>Category</th><th>Delete</th></tr>";
								while($v=mysql_fetch_array($rs))
								{	
									$ct=$v['cat_id'];
									$rsct=mysql_query("select * from category where cat_id=$ct");
									$vct=mysql_fetch_array($rsct);
									echo "<tr><td>".$v['p_name']."</td><td>".$v['p_price']."</td><td>".$vct['cat_name']."</td><td><a href=companyproducts.php?delid=".$v['p_id'].">Delete</a></td></tr>";
								}
							echo"</table>";
							}	
							else
							{
								
								echo "<div class=product-grid-holder><div class=row no-margin><h2 class=section-title align=center>No Products Available</h2>";	
							}
					?>							
                   
			</div>
			</div>

	</div><!-- /.container -->
</div><!-- /#	top-banner-and-menu -->	
</div>
</div>
</div>
</div>
<!-- ========================================= SECTION � HERO : END ========================================= -->			
		

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