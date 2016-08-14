<?php 

require_once("includes/db.php");
$order_id=$_GET['order_id'];
$remove=mysqli_query($link,"delete from order_management where `order_id`=".$order_id);
$remove1=mysqli_query($link,"delete from product_order where `order_id`=".$order_id);
header('location:shoppingcart.php');

?>
