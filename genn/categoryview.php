<?php
session_start();
include_once("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	
<body>
	
	<div class="wrapper">
<?php
if(!isset($_SESSION['uid']))
{
	
	echo "<script>window.location='signin.php?ci=".$_GET["ci"]."';</script>";
}
		include_once("include/userh.php");
		
?>
            
        <!-- ========================================= CONTENT ========================================= -->

	
<!-- ============================================================= HEADER : END ============================================================= -->		<div id="top-banner-and-menu">
	<div class="container">
	
	<?php include_once("include/categories.php");
		$c=$_GET["ci"];
		$rcat=mysql_query("select * from category where cat_id=$c");
		$vc=mysql_fetch_array($rcat);
        ?>
		<div class="col-xs-12 col-sm-9 no-margin wide sidebar">

           

            <section id="gaming">
   
      <h2 class="section-title" align="center"><?php echo $vc['cat_name']; ?> </h2>
        
        
                                
        <div class="tab-content">
            <div id="grid-view" class="products-grid fade tab-pane in active">              
                
                    <div class="row no-margin">
                        <?php
							$rs=mysql_query("select * from product where cat_id=$c");
							if(mysql_num_rows($rs)>0)
							{
							while($v=mysql_fetch_array($rs))
								{
									$cid=$v["c_id"];
									$name=$v["p_name"];
									$img=$v["p_image1"];
									$rsc=mysql_query("select * from company where c_id=$cid");
									$va=mysql_fetch_array($rsc);
								?>
								<div class="product-grid-holder">
					<div class="col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="image">
                                   <?php echo "<a href=productdetails.php?pid=".$v['p_id']."><img width=220px height=220 src=assets/images/products/$img></a>" ?>
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <?php echo "<a href=productdetails.php?pid=".$v['p_id']."> $name </a>" ?></a>
                                    </div>
                                    <div class="title"><?php echo $va['org_name']; ?></div>
                                </div>
                                <div class="prices">
                                    <div class="price-current pull-left"><?php echo "Rs. ".$v['p_price']; ?></div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <?php  echo  "<a href=productdetails.php?pid=".$v['p_id']." class=le-button>View Product</a>";?>
                                    </div>   
                                </div>
                            </div><!-- /.product-item -->
					</div><!-- /.product-item-holder -->
                        </div>
						
							 <?php
								}
							}
							else
							{
								echo "<h2 class=section-title align=center>No Products Available</h2>";	
							}
				?>
				
 					</div>
           <!-- /.products-grid #list-view -->
        </div><!-- /.tab-content -->
    </div><!-- /.grid-list-products -->                       
        </div><!-- /.col -->
        <!-- ========================================= CONTENT : END ========================================= -->    
    	
		</div>
	</div>
	</div>		
<?php
	include_once('include/footer.php')
?>
	<!-- For demo purposes – can be removed on production : End -->

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