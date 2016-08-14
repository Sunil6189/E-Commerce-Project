<?php

require_once("../includes/db.php");
if (isset($_POST['submit']))
{
	$name=$_POST['admin'];
   $password=$_POST['password'];
 
	$query="insert into admin (name,password) values ('$name', '$password')";
  
	$result=mysql_query($query);
  
	if($result== '1')
{
	?>
	<script>

	alert("you have signup successfully ");
	window.location="index.php";
	</script>
    
    <?php
	
	}
  
else
{
	?>
	<script>

	alert("signup unsuccessfull please try again ");
	window.location="signup.php";
	</script>
    
    <?php

	

}
}

?>


