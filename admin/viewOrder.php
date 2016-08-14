	
<?php
require_once("../includes/db.php");

	$order_id=$_GET['id'];
	$gtotal=$_GET['gtotal'];
$shipping_cost=$_GET['scharges'];
		$q="select * from order_management where order_id='".$order_id."'";
									$rset=mysqli_query($link,$q);
									$row=mysqli_fetch_array($rset);
								$customer_id=$row['customer_id'];
								$to=$row['delivery_address'];
								$payment_status=$row['payment_status'];
								$delivery_status=$row['delivery_status'];
		$q_product="select * from product_order where order_id='".$order_id."'";
		$result=mysqli_query($link,$q_product);
		$product_info= array();
		while($row=mysqli_fetch_array($result))
		{
		
			$product_info[] .= "Product id: "."{$row['product_id']}    Qunatity: {$row['quantity']} ";
		}
		
								
if (isset($_POST['submit']))
{
	$orderstatus=$_POST['orderStatus'];
	
	?>
	<script>
	window.location="updateOrder.php?id=<?php echo $order_id ?>&status=<?php echo $orderstatus?>";
	</script>
	
  <?php 
}
								
if (isset($_POST['submit1']))
{
	$paymentstatus=$_POST['paymentStatus'];
	?>
	<script>
	window.location="updateOrderPayment.php?id=<?php echo $order_id ?>&status=<?php echo $paymentstatus?>";
	</script>
	
  <?php 

}
  
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Order Status::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div id="content">
    <div class="top">
    <div class="left"></div>

    <div class="right"></div>
    <div style="width:620px;" class="center">
      <h1>Order Details</h1>
    </div>
  </div>
    <div class="bottom">&nbsp;</div>
    
    
      <div style="width:620px;" class="middle">
            
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">


<table width=100% border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td height="56" align="left">Order ID</td>
    <td>:</td>
    <td><input type="text" name="name" id="name" value="<?php echo $order_id; ?>" disabled/></td>
  </tr>
  <tr>
    <td height="56" align="left">Customer ID</td>
    <td>:</td>
    <td><input type="text" name="price" id="price" value="<?php echo $customer_id; ?>" disabled/></td>
     <td align="right"><input type="button" class="button" value="Show Details" onClick="window.location='viewUser.php?id=<?php echo $customer_id;?>&order_id=<?php echo $order_id;?>'"/></td>
  </tr>
   <tr>
    <td align="left">Products ordered</td>
    <td>:</td>
    <td><textarea disabled cols="25" rows="5"><?php echo implode('',$product_info); ?></textarea></td>
  </tr>
  <form method="post" enctype="multipart/form-data" name="orderStatus">
  <tr>
    <td height="51" align="left">Order Status</td>
    <td>:</td>
    <td><select name="orderStatus" id="orderStatus">
      <option value="select">Change Status</option>
    <option value="Pending">Pending</option>
    <option value="Delivered">Delivered</option>
	    <option value="Cancelled">Cancelled</option>
	
		
    </select>      
      <input type="text" name="orderStatus_text" id="orderStatus_text" disabled value="<?php echo $delivery_status; ?>"/></td>
    <td align="right"><input type="submit" class="button" name="submit" value="Update" /></td>
  </tr></form>
  <form method="post" enctype="multipart/form-data" name="paymentStatus">
  <tr>
    <td height="59">Payment Status</td>
    <td>:</td>
    <td><select name="paymentStatus" id="paymentStatus">
      <option value="select">Change status</option>
    <option value="Pending">Pending</option>
    <option value="Paid">Paid</option>
	
		
    </select>      <input type="text" name="paymentStatus_text" id="paymentStatus_text" disabled value="<?php echo $payment_status; ?>"/></td>
    <td align="right"><input type="submit" name="submit1" class="button" value="Update"/></td>
  </tr>
  
  </form>
  </table>
  <div class="buttons">
        <table width="100%">
         <tr>

           
            <td colspan="3" align="center"><input type="button" name="edit" class="button" value="&nbsp;&nbsp;&nbsp;Ok&nbsp;&nbsp;&nbsp;" onClick="window.location='all_order.php'"/>&nbsp;&nbsp;
             <input type="button" class="button" value="&nbsp;&nbsp;Back&nbsp;&nbsp;" onClick="window.location='all_order.php'" /></td>
           
          </tr>
      </table>
      </div>
</form>
</form>

<div align="center" id="error" style="height:20px; font-weight:bold; text-decoration:blink; font-size:12px;">
<?php if(isset($msg)) 
{
	echo $msg; 
}
?>
</div>
</div>
</div></br></br>
<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->


</div>
</body>
</html>