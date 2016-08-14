<?php
require_once("includes/db.php");
if (isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $enquiry=$_POST['enquiry'];
   $sql= "insert into contact(name,email,enquiry) values ('$name', '$email', '$enquiry')";
   $res=mysqli_query($link,$sql);
    if($res=='1')
  {
	?>
	<script>
    alert("insertion Successfull");
	window.location="index.php";
	</script>
    <?php
	}
    else
   {
	?>
	<script>
	alert("Unsuccessfull insertion please try again ");
	window.location="contact.php";
	</script>
     <?php
  }
}
?>


