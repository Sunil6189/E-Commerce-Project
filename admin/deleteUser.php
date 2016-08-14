<?php 

require_once("../includes/db.php");
	
$remove_id=$_GET['id'];

$remove=mysqli_query($link,"delete from users where `id`=".$remove_id);
if($remove==1)
{
	?>
    <script>
	window.location="users.php"
	</script>
    <?php
}
else
{
	?>
<script>
alert('unsucessfull deletion try again');
	window.location="users.php"

	</script>
<?php
}

?>