<?php 

require_once("../includes/db.php");
$order_id=$_GET['id'];
$status=$_GET['status'];

$result=mysqli_query($link,"update order_management set `payment_status`='".$status."'where `order_id`=".$order_id);
if($result=='1')
{
	?>

<script>
	alert("Update successfully");
	window.location="all_order.php";
	</script>
    <?php
}
else
{
	?>
     <script>
	alert("update unsucessfull please try again");
	window.location="viewOrder.php?id=<?php echo $order_id ?>";
	</script>
<?php	
}

	?>

?>