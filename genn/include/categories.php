<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include_once("connect.php");

?>
<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
				
<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown">
    <div class="head"><i class="fa fa-list"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <li class="dropdown menu-item">
                <a href="products.php" class="dropdown-toggle" >All Categories</a>
				<?php
				$q=mysql_query("select * from category ORDER BY cat_name");
				while($v=mysql_fetch_array($q))
			echo "<li class=dropdown menu-item> <a class=dropdown-toggle href=categoryview.php?ci=".$v['cat_id'].">".$v['cat_name']."</a> </li>"
                ?>
           <!-- /.menu-item -->
            

            
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->	
</div><!-- /.sidemenu-holder -->
<body>
</body>
</html>
