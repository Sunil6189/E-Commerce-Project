	
<?php
require_once("../includes/db.php");

	$user_id=$_GET['id'];
		$q="select * from users where id='".$user_id."'";
									$rset=mysqli_query($link,$q);
									$row=mysqli_fetch_array($rset);
								$fname=$row['fname'];
								$lname=$row['lname'];
								$email=$row['email'];
								$address=$row['address'];
								$telephone=$row['telephone'];
								$pincode=$row['pincode'];
								
	

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>User Details::Admin Panel</title>
<script type="text/javascript">

function pchange()
{
	var cat = document.getElementById('s_change').value;
	
	document.getElementById('p_change').value=cat;

	}
function update(id)
{
	alert(id);
var xmlhttp;
		var user_id=id;
		
		
		xmlhttp=new XMLHttpRequest();//to create XMLHttpRequest Object
		
xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				window.location.reload();
				}
	  }
xmlhttp.open("GET","proof_status.php?id="+user_id,true);//to send request to server
xmlhttp.send();
	
	
	
	}

</script>

</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div id="content">
    <div class="top">
    <div class="left"></div>

    <div class="right"></div>
    <div class="center">
      <h1>User Details</h1>
    </div>
  </div>
    <div class="bottom">&nbsp;</div>
    
    
      <div class="middle">
            <b style="margin-bottom: 2px; display: block; font-size:13px">User Details</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">



<form method="post" enctype="multipart/form-data" name="viewUser">

<table width=100% height="204" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="" height="40" align="left">Name</td>
    <td width="10">:</td>
    <td width=""><?php echo $fname."&nbsp;".$lname;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Email</td>
    <td>:</td>
    <td><?php echo $email;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Mobile Number</td>
    <td>:</td>
    <td><?php echo $telephone;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Address</td>
    <td>:</td>
    <td><?php echo $address;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Pincode</td>
    <td>:</td>
    <td><?php echo $pincode;?></td>
  </tr>
   <tr>
  
  
  
  
  </table>
  <div class="buttons">
        <table>
         <tr>
             <td align="center"><input type="button" class="button" value="Back" onClick="window.location='users.php'" /></td>
         </tr>
      </table>
      </div>
</form>


<div align="center" id="error" style="height:20px; font-weight:bold; text-decoration:blink; font-size:12px;">
<?php if(isset($msg)) 
{
	echo $msg; 
}
?>
</div>
</div>
</div></div></br></br>

<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->

</div>
</body>
</html>