<?php 

require_once("../includes/db.php");

$del=$_GET['id'];
$remove="delete from product where product_id='$del'";
$result=mysqli_query($link,$remove);
	if($result=='1')
{
	?>

<script>
	alert("delete successfully");
	window.location="viewProduct.php";
	</script>
    <?php
}
else
{
	?>
     <script>
	alert("delete unsucessfull please try again");
	window.location="viewProduct.php";
	</script>
<?php	
}

	?>
