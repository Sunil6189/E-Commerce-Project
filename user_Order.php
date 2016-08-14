  	
<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");
$user_id=$_SESSION['userid'];

		?>
			
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Your Orders: Tech Solution</title>

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
              Your Orders
                </div>
 <!--title end-->
 <?php $q="select * from order_management where customer_id='".$user_id."'"; 
			$no_rows=0;
			$result=mysqli_query($link,$q);
				$no_rows=mysqli_num_rows($result);
           if($no_rows>0){ 
   
      echo '<div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">';
       
		
	 
     echo '<table style="width: 100%;" cellpadding="2" cellspacing="0" align="center" class="cart">';
     echo '<tr>';
	  echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Order Id</b></span>';
	 echo '</td>';
	 echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Delivery Address</b></span>';
     echo '</td>';
	 echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Total Amount</b></span>';
     echo '</td>';
	  echo '<td align="center" valign="top">';
     echo '<b style="font-size:14px;">Order Status</b></span>';
     echo '</td>';
	 echo '<tr><td></td></tr>';

        

              while($row=mysqli_fetch_array($result)) {
                
			                	$order_id=$row['order_id'];
								$to=$row['delivery_address'];
								$amount=$row['amount'];
								$delivery_status=$row['delivery_status'];

                echo '<tr>';
				
				echo '<td align="center" valign="top"><b style="font-size:12px;"><a style="padding:5px;" href="viewOrderDetails.php?order_id='.$order_id.'">'.$order_id.'</td>';
                echo '<td align="center" valign="top"><b style="font-size:12px;">'.$to.'</td>';
                echo '<td align="center" valign="top"><b style="font-size:12px;">$'.$amount.'</td>';
                echo '<td align="center" valign="top"><b style="font-size:12px;"> $'.$delivery_status.'</td>';
                echo '</tr>';
				     echo '<tr><td></td></tr>';
				}
		       
	    
         
			echo '<tr><td></td></tr>';
		  echo '<tr><td align="center" colspan="4">
		&nbsp&nbsp<a href="index.php"><button style="float;font-size:14px;">Continue Shopping</button></a></td>';
		   
          
	     
		 echo '</tr></table>';
	 }else
				{
				
                 echo '<table><tr><td align="right"><span class="cart_module_total"><b style="font-size:14px;">You have not ordered anything yet with us.</td></tr></table>';
      
				}?>
		
		

</div>
 </div>

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>

</body></html> 