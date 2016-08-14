<?php if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");
	$gtotal=$_SESSION["gtotal"];
	$shipping_cost=$_SESSION["scharge"];
	$order_id=$_SESSION["order_id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>check out:: Tech Solution</title>
</head>
<body>
<div id="container">

<?php include("header.php"); 
include("leftbar.php");
include("rightbar.php");


?>

<div style="width:600px; margin:auto;">
<!--title-->

                <div style="background:#fff;padding: 8px 0px 7px 0px;
	border-bottom:1px solid #dcdcdc; height:30px; font-size:20px; text-align:left; color:#000;">
             Checkout
                </div>
 <!--title end-->
 
  <div style="font-size:12px;">
<form method="post" enctype="multipart/form-data" id="cart">
<table class="cart">
        <tr>
         
          <th align="center">Name</th>
          <th align="center">Model</th>

          <th align="center">Quantity</th>
          		  <th align="right">Unit Price</th>
          <th align="right">Total</th>
		          </tr>
			 
<?php 
$total=0;
  foreach($_SESSION['cart'] as $product_id => $quantity) 
	    {
            $q = ("SELECT product_id,product_name, price FROM product WHERE product_id = ".$product_id);
			$result=mysqli_query($link,$q);

           if($result){

              while($obj = $result->fetch_object()) {
         
		$pname=$obj->product_name;
		$model=$obj->product_id;
		$price=$obj->price;
		 $cost = $price * $quantity;
		 $total = $total + $cost;
    echo" <tr class='even'>
       

          <td align='center' valign='top'><a href='product_info.php?title=".$pname."'>".$pname."</a>
                        </td>
          <td align='center' valign='top'>Product ".$model."</td>
          <td align='center' valign='top'>".$quantity."</td>
          		  <td class='cart_page_price' align='right' valign='top'>$".$price."</td>

          <td class='cart_page_price2' align='right' valign='top'>$".$cost."</td>
		          </tr> ";
				  
			  }
		   }
		}
			  
				  
?>
     </table>	     
	  	  <div style='width: 100%; display: inline-block; border-bottom: 1px solid rgb(206, 206, 206); margin-bottom: 10px;'>
        <table style='float: right; display: inline-block;'>
                 <tr>
            <td align='right'><b style="font-size:14px;">Gross Total:</b></td>
            <td class='cart_page_price2' align='right' style="font-size:14px;">$<?php echo $total;?></td>

          </tr>
                  
           <tr>
            <td align='left'><b style="font-size:14px;">Shipping Charges:</b></td>
			
	
            <td class='cart_page_price2' align='right'>$<?php echo $shipping_cost;?></td>
          </tr>
                    <tr> 
					
            <td align='left'><b style="font-size:14px;">Payable Amount:</b></td>

            <td class='cart_page_price2' align='right'>$<?php echo $gtotal;?></td>
          </tr> </table> <br>
          </div>
          <div style="font-size:14px;">
        <table class="cart" >
          <tr><td>
<form action='checkout.php' METHOD='POST'>
<input type="hidden" name="amount" value=<?php echo $gtotal; ?> >
<input type='button'   onclick='window.location="paypal.php?gross_total=<?php echo $gtotal; ?>&order_id=<?php echo $order_id;?> "' style="background-image:url('https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif');height: 45px;  
    width: 150px" border='0' align='top' alt='Check out with PayPal'/>
</form></td>
			<td></td>
             <td align="right"><a href="cancelOrder.php?order_id=(<?php echo $order_id;?>)"><button style="float">Cancel Order</a>
			
			 </td>
           
          </tr>
      </table>
      </div>


				  
      
	       
    </form>
	
    </div>
 

</div>


<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 