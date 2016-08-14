<?php session_start(); 
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();

}
?>
<?php
require_once("includes/db.php");
$search=$_POST['search'];
$search=preg_replace("#[0-9]#i","",$search);
$count=0;
$q="select * from product where product_name like '%$search%'";
								$rset=mysqli_query($link,$q);
								$count=mysqli_num_rows($rset);
								$row=mysqli_fetch_array($rset);
								$title=$row['product_name'];
								$image=$row['image'];
								$price=$row['price'];
								$quantity=$row['quantity'];
								$category=$row['category'];
								$product_id=$row['product_id'];
								$description=$row['description'];
								$manufacturer=$row['manufacturer'];
								
								
					?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<title><?php echo $search; ?>:Tech Solution</title>
</head>
<body>
<div id="container">

<?php include("header.php"); 
include("leftbar.php");
include("rightbar.php");?>

<div style="width:600px; margin:auto;">
<?php if ($count>0) { 


?>
								
<!--title-->
  <div style="background:#fff;padding: 8px 0px 7px 0px;
	border-bottom:1px solid #dcdcdc; height:30px; font-size:20px; text-align:left; color:#000;">
                <?php echo $title; ?>
                </div>
 <!--title end-->

 <div style="background-color:#FFF; height:auto;">
 
 <!--image-->               
                <div style="float:left; text-align:center; width:300px;">
     	<a href="products/<?php echo $image;?>" title="<?php $title; ?>" target="_blank">
     	<img src="products/<?php  echo $image;?>" title="<?php $title; ?>" alt="<?php $title; ?>" height="300" 
        width="300" id="image" />
        </a>
     </div>
  <!--image end-->   
    <!--product detail-->   

     <div style="font-size:12px; background:#fff; float:left; width:300px;"> 
                 <p><b>Price : </b> <span class="main_price">$<?php echo $price; ?></span></p>
                 <p><b>Availability : </b><?php if($quantity>0)
				 						{
											echo "In Stock";
										}
										else
										{
											echo "Not In Stock";
											
										}
										?>
                                        </p>
                 <p><b>Model : </b>Product <?php echo $product_id; ?></p>
                 <p><b>Manufacturer : </b><?php echo $manufacturer; ?></p>
				 
                   <p><b>description : </b><?php echo $description; ?></p>
               
                         <span id="product">
                                      <div class="content">
                                   <?php  echo '<p><a href="updatecart.php?action=add&id='.$product_id.'"><input type="submit" value="Add To Cart" /></a></p>'; ?>
                            
                                      </div>
                         </span>
                         <span id="status"></span>
						    <?php $_SESSION['product_id'] = $product_id; ?>

            </div>
                
      <!--product detail end-->              
      </div> 
<?php } else {
	
				echo "<div style='background-color:#FFF; height:auto;'>";
                 echo '<table><tr><td align="right"><span class="cart_module_total"><b style="font-size:14px;">Sorry ,No Product Found. Please try with Different Name</td></tr></table>';
				echo "</div>";
				}?>
		
       
        
</div>

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 