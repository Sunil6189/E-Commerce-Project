 <?php
 require_once("../includes/db.php");
	
$remove_id=$_GET['email'];
$remove=mysqli_query($link,"delete from feedback where email='$remove_id'");
if($remove==1)
{
	?>
    <script>
	window.location="userfeedback.php";
	</script>
    <?php
}
else
{
	?>
<script>
alert('unsucessfull deletion try again');
window.location="userfeedback.php";
</script>
<?php
}
?>
