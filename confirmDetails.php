  <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");
$userid=$_SESSION['userid'];

$q="select * from users where id=".$userid;
									$rset=mysqli_query($link,$q);
									$row=mysqli_fetch_array($rset);
								$fname=$row['fname'];
								$lname=$row['lname'];
								$address=$row['address'];
								$telephone=$row['telephone'];
								$pincode=$row['pincode'];

 $total=0;	
 foreach($_SESSION['cart'] as $product_id => $quantity) 
	    {
            $q = ("SELECT product_id,product_name, price FROM product WHERE product_id = ".$product_id);
			$result=mysqli_query($link,$q);

           if($result){

              while($obj = $result->fetch_object()) {
      
		$price=$obj->price;
		 $cost = $price * $quantity;
		 $total = $total + $cost;
	if($total<=200)
	{
		$shipping_cost=20;
		
		}
	else
	{
		$shipping_cost=0.0;
	}
	$gtotal=$total+$shipping_cost;
			  }
		   }
		}	
if(isset($_POST['submit']))
{	
$order_id=time();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$telephone=$_POST['telephone'];
$postal_address=$_POST['address'];
$pincode=$_POST['pincode'];
							
	$enter="update users set `fname`='$fname',`lname`='$lname',`telephone`='$telephone',`address`='$postal_address' ,`pincode`='$pincode' where id='$userid'";

		
	mysqli_query($link,$enter);
	if(mysqli_affected_rows($link)>=0)
	{ 
       $order="insert into order_management(`order_id`,`customer_id`,`delivery_address`,`amount`,`payment_status`,`delivery_status`) VALUES('$order_id','$userid','$postal_address','$gtotal','pending','pending')";
      $result=mysqli_query($link,$order);	   
	  if(mysqli_affected_rows($link)>0)
	  {
	   foreach($_SESSION['cart'] as $product_id => $quantity) 
		{
			$pdeatils="insert into product_order(`order_id`,`product_id`,`quantity`) VALUES('$order_id','$product_id','$quantity')";
			$result=mysqli_query($link,$pdeatils);	 
		}
		$_SESSION["order_id"]=$order_id;
		$_SESSION["gtotal"]=$gtotal;
		$_SESSION["scharge"]=$shipping_cost;
		header('location:checkout.php');
	  }
	}
}?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Confirm Details : Tech Solution</title>
</head>
<body>
<div id="container">
<?php
 include("header.php"); 
include("leftbar.php");
include("rightbar.php");?>
<div style="width:600px; margin:auto;">

         <div style="background:#fff;padding: 8px 0px 7px 0px border-bottom:1px solid #dcdcdc; height:30px; font-size:20px; text-align:left; color:#000;">
             Confirm Delivery Details
         </div>
 <!--title end-->
 <div style="background-color:#FFF; height:auto;">
  <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
<form action="" method="post"  enctype="multipart/form-data">
   <table width="100%" height="120" border="0">
               
  <tr>
    <td><span class="required">*</span>Recipent' First Name</td>
    <td width="8" >:</td>
    <td width="372" ><input type="text" name="fname" id="fname" value="<?php echo $fname ?>" /></td>
  </tr><tr>
    <td><span class="required">*</span>Recipent' Last Name</td>
    <td width="8" >:</td>
    <td width="372" ><input type="text" name="lname" id="lname" value="<?php echo $lname ?>" /></td>
  </tr>
 
  <tr>
            <td><span class="required">*</span>Postal Address :</td>
			  <td>:</td>
            <td><textarea name="address" id="address" required="required" ><?php echo $address; ?></textarea>
              </td>
          </tr>
   <tr>
            <td><span class="required">*</span> Pin Code</td>
			   <td>:</td>
            <td><input name="pincode" value="<?php echo $pincode;?>" type="text" required="required">
			  </td>
          </tr>
		  <tr>

            <td><span class="required">*</span> Telephone:</td>
			 <td>:</td>
            <td><input name="telephone" value="<?php echo $telephone;?>" type="text" required="required">
              </td>
          </tr>
 
</table>
                
              </div>
         
    <div style="font-size:14px;">
         <table class="cart" >
          <tr>

            <td align="center"><input type="submit" name="submit" value="Confirm Details"></td>
      
             <td align="left"><input type="button" name="submit" value="Back to Shop" onclick="window.location='shoppingcart.php'" ></td>
			 </td>
           
          </tr>
      </table>
      
      </div>
     </div>
    </form>
   
  </div>
</div>

 
<div style="margin-left:300px;"> 
<div style="margin-left:300px;">  
<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</div>
</body></html> 