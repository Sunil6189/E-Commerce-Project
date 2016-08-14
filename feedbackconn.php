
<?php
require_once("includes/db.php");
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];
    $compare=$_POST['r1'];
    $media=$_POST['r2'];
  $visit=$_POST['r3'];
  $suggest=$_POST['suggestion'];
   $query="select * from feedback";
  $result=mysqli_query($link,$query);
  while($row = mysqli_fetch_array($result))
  {
 if($row['Email']==$email)
	{
	 $sql="update feedback set Name='$name',Comparison='$compare',Media='$media',Visit='$visit',Suggestion='$suggest' where Email='$email'"; 
	  $res=mysqli_query($link,$sql);
	  
	  if($res=='1')
		{
			?>
			<script>
			alert( "Successfull updation");
			window.location="index.php";
			</script>
    
		<?php

		}
  
	else
		{
			?>
			<script>
			alert("Unsuccessfull updation please try again");
			window.location="feedback.php";
			</script>
			<?php
		}
	}
 }
	$sql="insert into feedback(Name,Email,Comparison,Media,Visit,Suggestion) values ('$name', '$email','$compare','$media','$visit','$suggest')";
	$res=mysqli_query($link,$sql);
  
	if($res=='1')
	{	?>
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
		alert("Unsuccessfull insertion please try again");
		window.location="feedback.php";
		</script>
    
		<?php
	}

  }



?>
