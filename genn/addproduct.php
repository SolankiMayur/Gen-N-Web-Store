<?php
	session_start();
	if(!isset($_SESSION['cid']))
	{
		echo "<script>window.location='index.php';</script>";
	}
	include_once("connect.php");
	if(isset($_POST['addproduct']))
	{	
		
		$c=$_SESSION['cid'];
		$ct=$_POST['pcat'];
		$rs=mysql_query("select * from category where cat_name='$ct'");
		$b=mysql_fetch_array($rs);
		$cat=$b['cat_id'];
		if(move_uploaded_file($_FILES['pimg1']['tmp_name'],"assets/images/products/".$_FILES['pimg1']['name']) &&
					move_uploaded_file($_FILES['pimg2']['tmp_name'],"assets/images/products/".$_FILES['pimg2']['name']) &&	
					move_uploaded_file($_FILES['pimg3']['tmp_name'],"assets/images/products/".$_FILES['pimg3']['name']))
					{
						$q="insert into product(c_id,p_name,p_price,p_desc,p_image1,p_image2,p_image3,cat_id) values($c,'".$_POST['pname']."',".$_POST['pprice'].",'".$_POST['pdesc']."','".$_FILES['pimg1']['name']."','".$_FILES['pimg2']['name']."','".$_FILES['pimg3']['name']."',$cat)";
				if(mysql_query($q))
				{
						
					echo "<script>
		alert('Congratulations ! \\nYour product was added Successfully.');
		</script>";
				}
					}
					else
					{
						echo "<script>
		alert('Image');
		</script>";	
					}
			
	}	
?>

<!DOCTYPE html>
<html lang="en">
	
<body>
	
	<div class="wrapper">
	<?php
	include_once("include/companyh.php");
	?>
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->

<!-- ============================================================= HEADER : END ============================================================= -->	
<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<!-- /.col -->

			<div class="col-md-6" >
				<section class="section sign-in inner-right-xs">
				<h2 class="bordered">Add Product</h2>
					<p>Post your own gen-N product</p>
					
						
            		<form role="form" class="register-form cf-style-1" name="add" id="comform" method="post" enctype="multipart/form-data" onSubmit="return chkProduct();">					<!-- /.field-row -->
						<div class="field-row">
                            <label>Product Name</label>
                            <input type="text" class="le-input" name="pname">
                        </div><!-- /.field-row -->
						<div class="field-row">
                            <label>Product Price(Rs.)</label>
                            <input type="text" class="le-input" name="pprice" onKeyPress="validNumber();">
                        </div>
						<div class="field-row">
						    <label>Product Category</label>
							<select name="pcat">
                           <?php
								$rsc=mysql_query("select * from category");
								while($v=mysql_fetch_array($rsc))
								{	
								echo "<option id=".$v['cat_id']."value=".$v['cat_id'].">".$v['cat_name']."</option>";
								}
							?>
							</select>
                        </div>
						<div class="field-row">
                            <label>Product Description</label>
                            <textarea class="le-input" rows="6" name="pdesc"></textarea>
                        </div>
						<div class="field-row">
                            <label>Product Image 1</label>
                            <input type="file" class="le-input" name="pimg1" >
                        </div>
						<div class="field-row">
                            <label>Product Image 2</label>
                            <input type="file" class="le-input" name="pimg2" >
                        </div>
						<div class="field-row">
                            <label>Product Image 3</label>
                            <input type="file" class="le-input" name="pimg3" >
                        </div>
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="addproduct">Add Product</button>
                        </div><!-- /.buttons-holder -->
					</form>
					<h2 class="semi-bold">Add the product today and your product will be visible to all our users</h2>
				</section><!-- /.register -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
	</div>
</main><!-- /.authentication -->
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