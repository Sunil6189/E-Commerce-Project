<?php 

require_once("../includes/db.php");
	
$remove_id=$_GET['email'];
$remove=mysqli_query($link,"delete from contact where email='$remove_id'");
if($remove==1)
{
	?>
    <script>
	
	window.location="enquiry.php";
	</script>
    <?php
}
else
{
	?>
<script>
alert('unsucessfull deletion try again');
	window.location="enquiry.php";

	</script>
<?php
}

?>