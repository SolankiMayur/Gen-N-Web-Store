<?php
include_once("connect.php");
$rs=mysql_query("select * from product ORDER BY p_id DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<section>
<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder" >
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                
                <li class="active"><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
               
            </ul>

            <!-- Tab panes -->
			<div class="tab-content">
            	<div class="tab-pane active" id="featured">
				 <?php
				 $i=0;		
				while($v=mysql_fetch_array($rs))
				{
					if($i<4)
					{
						$i++;
						$cid=$v["c_id"];
						$name=$v["p_name"];
						$img=$v["p_image1"];
						$rsc=mysql_query("select * from company where c_id=$cid");
						$va=mysql_fetch_array($rsc);
				?>
						<div class="product-grid-holder">
                		<div class="col-sm-3 col-md-3  no-margin product-item-holder hover">
               			 <div class="product-item">
						<div class=image>
                         <?php echo "<a href=productdetails.php?pid=".$v['p_id']."><img width=220px height=220 src=assets/images/products/$img></a>" ?>  
						</div>
                        <div class=body>
                        <div class=title>
                         <?php echo "<a href=productdetails.php?pid=".$v['p_id'].">$name</a>" ?>                                    										   						</div>
                        <div class=title><?php echo $va['org_name']; ?></div>
                        </div>
                        <div class=prices>            
                        <div class=price-current pull-right><?php echo "Rs. ".$v['p_price']; ?></div>
                        </div>
                        <div class=hover-area>
                        <div class=add-cart-button>
                        <?php  echo  "<a href=productdetails.php?pid=".$v['p_id']." class=le-button>View Product</a> "; ?>
						</div>
                        </div>
                        </div>
						</div>	  
						 <?php	
				 			
					}
				}			
						?>
						
					 </div>
				</div>
			 </div>
			</div>
        </div>
   </div>
</div>
</div>
					<div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="products.php">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div>
</div>
</section>
</body>
</html>
