	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

           function remove(id)
{
	var r=confirm("Do You Really Want To Delete This User?");
if (r==true)
  {
 var xmlhttp;
		var remove_id=id;
		
		
		xmlhttp=new XMLHttpRequest();//to create XMLHttpRequest Object
		
xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				window.location.reload();
				}
	  }
xmlhttp.open("GET","deleteUser.php?id="+remove_id,true);//to send request to server
xmlhttp.send();
	
  }
  
  
	}
	function view(id)
	  {
 window.location = "viewUser.php?id="+id;
  }
  
 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Add Product::Admin Panel</title>
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
      <h1>Users</h1>
    </div>
  </div>
    <div class="bottom">&nbsp;</div>
    
    
      <div class="middle">
            <b style="margin-bottom: 2px; display: block; font-size:13px">User Details</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">



<form method="post" enctype="multipart/form-data" name="addproduct">

<table width=100% height="42" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <th align="center">USER ID</th>
    <th align="center">USERNAME </th>
    <th align="center">DETAILS</th>
    <th align="center">DELETE USER</th>
  </tr>
  <?php 
require_once("../includes/db.php");
  $q="select * from users";
			$result=mysqli_query($link,$q);
			
		
       while($row=mysqli_fetch_array($result))
		   {
			  
				  
				?>

        <td align='center'><?php echo $row['id'];?>
         </td>

       
		   <td align='left'><?php echo $row['email'];?></td>
           <td align='center'>
		  		   <input type='button' name='submit' class='button' value='View Details' onclick='view(<?php echo $row['id'];?>)' /></form>
		    </td> 
		   <td align='center'><input type='button' name='submit' class='button' value='Delete' onclick="window.location='deleteUser.php?id=<?php echo $row['id'];?>'"/></td></tr>
	<?php	
		
	   }
      ?>      

</table>

</form>

<div align="center" id="error" style="height:20px; font-weight:bold; text-decoration:blink; font-size:12px;">
<?php if(isset($msg)) 
{
	echo $msg; 
}
?>
</div>
</div>
</div></br></br>
<!--footer-->
<?php include("adminfooter.php");?>


</div>
</body>
</html>