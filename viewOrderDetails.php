  	
<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");
$order_id=$_GET['order_id'];

		?>
			
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Order Details: Tech Solution</title>

</head>
<body>
<div id="container">

<?php include("header.php"); 
include("leftbar.php");
include("rightbar.php");?>

<div style="width:600px; margin:auto;">
<!--title-->
                
				
				<div style="background:#fff;padding: 8px 0px 7px 0px;
	border-bottom:1px solid #dcdcdc; height:30px; font-size:20px; text-align:left; color:#000;">
              Your Orders Details
                </div>
 <!--title end-->
 <?php $q="select * from product_order where order_id='".$order_id."'"; 
			$no_rows=0;
			$result=mysqli_query($link,$q);
   
      echo '<div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">';
       
		
	 
     echo '<table style="width: 100%;" cellpadding="2" cellspacing="0" align="center" class="cart"';
     echo '<tr>';
	  echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Product Name</b></span>';
	 echo '</td>';
	 echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Manufacturer</b></span>';
	 echo '</td>';
	 echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Price</b></span>';
	 echo '</td>';
	 echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Qunatity Ordered</b></span>';
     echo '</td>';
	 echo '<tr><td></td></tr>';

        

              while($row=mysqli_fetch_array($result)) {
                
			                	$product_id=$row['product_id'];
								$quantity=$row['quantity'];
					$q1="select * from product where product_id='".$product_id."'"; 
			        $result1=mysqli_query($link,$q1);
					$row1=mysqli_fetch_array($result1);
					$product_title=$row1['product_name'];
					$product_man=$row1['manufacturer'];
					$product_price=$row1['price'];
                echo '<tr>';
				
				echo '<td align="center" valign="top"><b style="font-size:12px;"><a style="padding:5px;" href="product_info.php?title='.$product_title.'">'.$product_title.'</td>';
                echo '<td align="center" valign="top"><b style="font-size:12px;">'.$product_man.'</td>';
                echo '<td align="center" valign="top"><b style="font-size:12px;">'.$product_price.'</td>';
				 echo '<td align="center" valign="top"><b style="font-size:12px;">'.$quantity.'</td>';
                echo '</tr>';
				     echo '<tr><td></td></tr>';
				}
		       
	    
         
			echo '<tr><td></td></tr>';
		  echo '<tr><td align="center" colspan="4">
		&nbsp&nbsp<a href="user_Order.php"><button style="float;font-size:14px;">Back To Orders</button></a></td>';
		   
          
	     
		 echo '</tr></table>';
	 ?>
		
		

</div>
 </div>

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>

</body></html> 