<?php 

require_once("../includes/db.php");

$remove_id=$_GET['id'];

$result=mysqli_query($link,"delete from order_management where `order_id`=".$remove_id);
if($result=='1')
{
	?>

<script>
	alert("delete successfully");
	window.location="all_order.php";
	</script>
    <?php
}
else
{
	?>
     <script>
	alert("delete unsucessfull please try again");
	window.location="all_order.php";
	</script>
<?php	
}

	?>

