
  <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Shopping Cart: Tech Solution</title>

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
              Shopping Cart
                </div>
 <!--title end-->
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
        <?php if(isset($_SESSION['cart'])){
	 $total=0;
     echo '<table style="width: 100%;" cellpadding="2" cellspacing="0" align="center">';
     echo '<tr>';
	  echo '<td>';
     echo '<span class="cart_module_total"><b style="font-size:14px;">Product Code</b></span>';
	 echo '</td>';
     echo '<td>';
     echo '<span class="cart_module_total"><b style="font-size:14px;">Name</b></span>';
	 echo '</td>';
	 echo '<td>';
     echo '<span class="cart_module_total"><b style="font-size:14px;">Quantity</b></span>';
     echo '</td>';
	 echo '<td >';
     echo '<span class="cart_module_total"><b style="font-size:14px;">Price</b></span>';
     echo '</td></tr>';
	      echo '<tr><td></td></tr>';
	 
	     foreach($_SESSION['cart'] as $product_id => $quantity) 
	    {
            $q = ("SELECT product_name, price FROM product WHERE product_id = ".$product_id);
			$result=mysqli_query($link,$q);

           if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
				echo '<td><span class="cart_module_total"><b style="font-size:12px;">Product '.$product_id.'</td>';
                echo '<td><span class="cart_module_total"><b style="font-size:12px;">'.$obj->product_name.'</td>';
                echo '<td><span class="cart_module_total"><b style="font-size:12px;">'.$quantity.'<a style="padding:5px;" href="updatecart.php?action=add&id='.$product_id.'"><button style="float;">+</button></a><a style="padding:5px;" href="updatecart.php?action=remove&id='.$product_id.'"><button style="float;">-</button></a></td>';
                echo '<td><span class="cart_module_total"><b style="font-size:12px;"> $'.$cost.'</td>';
                echo '</tr>';
				     echo '<tr><td></td></tr>';
				}
		       }
	    }
		echo '<tr><td align="left" colspan="3"><span class="cart_module_total"><b style="font-size:14px;">Total</td>';
          echo '<td><span class="cart_module_total"><b style="font-size:14px;">$'.$total.'</td></tr>';
         	echo '<tr><td></td></tr>';	
			echo '<tr><td></td></tr>';
			echo '<tr><td></td></tr>';
		  echo '<tr><td colspan="2" align="left"><a href="updatecart.php?action=empty" ><button style="float;">Empty Cart</button></a>
		&nbsp&nbsp<a href="index.php"><button style="float;">Continue Shopping</button></a></td>';
		   
           echo ' <td colspan="2" align="right">';
	      if(isset($_SESSION['userid']))
	 
	 	{
		 //echo '<a href="checkout.php?action=empty" class="button alert"><b style="font-size:12px;">Checkout</a>';
		  echo '<a href="confirmDetails.php"><button style="float">Checkout</button></a>';
		 }
		 else
		 {
			// echo '<a href="login.php?action=empty" class="button alert"><b style="font-size:12px;">Checkout</a>';
			  echo '<a href="login.php"><button style="float:right;">Checkout</button></a>';
			 }
		 echo '</tr></table>';
	 }else
				{
				
                 echo '<table><tr><td align="right"><span class="cart_module_total"><b style="font-size:14px;">You have no items in your shopping cart.</td></tr></table>';
      
				}?>
		
		
		
	
      </div>
	  </div>
      

<!--footer-->
<?php include("footer.php");?> 
<!-- footer end-->
</div>
</body></html> 