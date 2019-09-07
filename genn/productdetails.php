<?php
session_start();
include_once("connect.php");
if(!isset($_SESSION['uid']))
{
	echo "<script>window.location='signin.php?pid=".$_GET['pid']."';</script>";
}
$pid=$_GET['pid'];
$userid=$_SESSION['uid'];
$rs=mysql_query("select * from product where p_id=$pid");
$v=mysql_fetch_array($rs);
$img1=$v["p_image1"];
$img2=$v["p_image2"];
$img3=$v["p_image3"];
$pnm=$v["p_name"];
$price=$v["p_price"];
$desc=$v['p_desc'];
$cid=$v['c_id'];
$cat=$v['cat_id'];
$rsc=mysql_query("select * from company where c_id=$cid");
$va=mysql_fetch_array($rsc);
$rsa=mysql_query("select * from category where cat_id=$cat");
$vc=mysql_fetch_array($rsa);
$rsu=mysql_query("select * from user where u_id=$userid");
$vu=mysql_fetch_array($rsu);
$rsr=mysql_query("select * from review where p_id=$pid");
$rno=mysql_num_rows($rsr);

?>
<?php

		include_once("include/userh.php");
if(isset($_POST['rsub']))
	{	
		
			$q="insert into review (u_id,p_id,u_review) values ($userid,$pid,'".$_POST['treview']."')";
			if(mysql_query($q))
				{
					echo "<script>
					alert('Review Added Successfully.');
					window.location='productdetails.php?pid=$pid';
					</script>";
				}
	}
?>

<!DOCTYPE html>
<html lang="en">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	
<body>
	
	<div class="wrapper">
            
      <!-- ========================================= CONTENT ========================================= -->

	
<!-- ============================================================= HEADER : END ============================================================= -->		
 
	
<div id="top-banner-and-menu">
	<div class="container">
	<?php include_once("include/categories.php");
        ?> 
	
		
		<div class="col-sm-9">
		
            <div id="single-product" class="row">
                 <div class="col-xs-12  gallery-holder">
    			<div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
		    <div class="single-product-gallery-item" id="slide1">
			<?php 
			echo "<img class=img-responsive src=assets/images/products/$img1 data-echo=assets/images/products/$img1 />"; ?>
        	</div><!-- /.single-product-slider -->
			
			<div class="single-product-gallery-item" id="slide2">
			<?php 
			echo "<img class=img-responsive src=assets/images/products/$img2 data-echo=assets/images/products/$img2 />"; ?>
        	</div><!-- /.single-product-slider -->

			<div class="single-product-gallery-item" id="slide3">
			<?php 
			echo "<img class=img-responsive src=assets/images/products/$img3 data-echo=assets/images/products/$img3 />"; ?>
        	</div>
		</div><!-- /.single-product-slider -->

        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <?php echo "<img  class=image-holder src=assets/images/products/$img1 />"; ?>                </a>
				<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <?php echo "<img   class=image-holder src=assets/images/products/$img2 />"; ?>                </a>
				<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <?php echo "<img  class=image-holder src=assets/images/products/$img3 />"; ?>                </a>            </div><!-- /#owl-single-product-thumbnails -->
            <!-- /.nav-holder -->
        </div>
        <!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->
                <div class="no-margin col-xs-12 col-sm-7 body-holder">
    <div class="body">
        <div class="star-holder inline"></div>
        
        <div class="title"><a href="#"><?php echo $pnm; ?></a></div>
        <div class="brand"><?php echo $va['org_name']; ?></div>
		<div class="excerpt">
            <p><?php echo $desc; ?></p>
        </div>

       

        
        
        <div class="prices">
            <div class="price-current"><?php echo "Rs $price"; ?></div>
           
        </div>

        <!-- /.qnt-holder -->
    </div><!-- /.body -->

</div><!-- /.body-holder -->
            </div><!-- /.row #single-product -->

            <!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="no-container">
        <div class="tab-holder">
            
            <ul class="nav nav-tabs simple" >
                <li class="active"><a href="#additional-info" data-toggle="tab">Seller's Details</a></li>
               
                <li><a href="#reviews" data-toggle="tab">Reviews(<?php echo $rno;?>)</a></li>
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="additional-info">
                    <ul class="tabled-data">
                        <li>
                            <label>Company :</label>
                            <div class="value"><?php echo $va['org_name'] ;?></div>
                        </li>
                        <li>
                            <label>Name :</label>
                            <div class="value"><?php echo $va['owner_name'] ;?></div>
                        </li>
                        <li>
                            <label>Contact :</label>
                            <div class="value"><?php echo "(+91)".$va['c_mno'] ;?></div>
                        </li>
                        <li>
                            <label>Email :</label>
                            <div class="value"><?php echo $va['c_email'] ;?></div>
                        </li>
                        <li>
                            <label>City :</label>
                            <div class="value"><?php echo $va['c_city'] ;?></div>
                        </li>
						<li>
                            <label>Address :</label>
                            <div class="value"><?php echo $va['c_address'] ;?></div>
                        </li>
						 <li>
                            <label>Pincode :</label>
                            <div class="value"><?php echo $va['c_pcode'] ;?></div>
                        </li>
                    </ul><!-- /.tabled-data -->

                    <div class="meta-row">
                        <div class="inline">
                            <label>Seller Company :</label>
                            <span><?php echo $va['org_name'] ;?></span>
                        </div><!-- /.inline -->

                        <span class="seperator">/</span>

                        <div class="inline">
                            <label>Category:</label>
                            <span><?php echo "<a href=categoryview.php?ci=$cat>".$vc['cat_name']."</a></span>" ?>
                        </div><!-- /.inline -->

                       
                    </div><!-- /.metaddit
					a-row -->
                </div><!-- /.tab-pane #additional-info -->
		        <div class="tab-pane" id="reviews">
                    <div class="comments">
                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    
                                </div><!-- /.col -->
						<?php
                               while($vr=mysql_fetch_array($rsr))
							   {
							   		$ur=$vr['u_id'];
									$r=mysql_fetch_array(mysql_query("select * from user where u_id=$ur"));
									$rusernm=$r['u_name'];
									$ruseremail=$r['u_email'];
									$rreview=$vr['u_review'];
									
                                 echo "<div class=comment-body>
                                        <div class=meta-info>
                                            <div class='author inline'>
                                            	$rusernm
											</div>
                                            <div class='date inline pull-right'>
                                                $ruseremail
                                            </div>
                                        </div>
                                        <p class='comment-text'>
                                            $rreview
                                        </p>
                                    </div>";
								}
									?>
                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->
                    </div><!-- /.comments -->

                    <div class="add-review row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="new-review-form">
                                <h2>Add review</h2>
                                <form id="contact-form" class="contact-form" method="post" >
                                    <div class="row field-row">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Name</label>
                                            <input disabled="disabled" ="text" class="le-input" value='<?php echo $vu['u_name'];?>'>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Email</label>
                                            <input disabled="disabled" type="text" class="le-input" value='<?php echo $vu['u_email'];?>'>
                                        </div>
                                    </div><!-- /.field-row -->
                                    
                                    
                                    <div class="field-row">
                                        <label>Your review</label>
                                        <textarea rows="8" class="le-input" name="treview"></textarea>
                                    </div><!-- /.field-row -->

                                    <div class="buttons-holder">
                                        <button type="submit" class="le-button huge" name="rsub">Submit</button>
                                    </div><!-- /.buttons-holder -->
                                </form><!-- /.contact-form -->
                            </div><!-- /.new-review-form -->
                        </div><!-- /.col -->
                    </div><!-- /.add-review -->

                </div><!-- /.tab-pane #reviews -->
            </div><!-- /.tab-content -->

        </div><!-- /.tab-holder -->
    </div><!-- /.container -->
</section><!-- /#single-product-tab -->
</div>
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