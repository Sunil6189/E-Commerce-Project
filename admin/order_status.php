<?php
require_once("../includes/db.php");

if (isset($_POST['submit']))
{
	
	$orderid=$_POST['id'];
	$q="select * from order_management where order_id='".$orderid."'";
									$rset=mysqli_query($link,$q);
									$row=mysqli_num_rows($rset);
								
									if($row>=1)
									{
										?>
										<script>
										window.location="viewOrder.php?id=<?php echo $orderid ?> ";
										</script>
    				             	<?php
										
									}
									else{
										?>
						<script>
						alert(" Order id does not exist");
						window.location="order_status.php";
						</script>
    					<?php
									}
}
	?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />
<title>Order Status::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:600px; margin:auto;">
 <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
<form name="enquire" method="post"> 
<table width=88% height="122" border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">View Order Details<hr/></caption>
 <tr>
       <td width="40%" align="right">Enter order id</td>
       <td width="2%">:</td>
       <td width="58%"><input type="text" name="id" id="id" required="required" ></td>
     </tr>
     <tr>
       <td colspan="3" align="center"><input type="Submit" name="submit" class='button' value="submit"></td>
       </tr>
       
  
</table>
</form>
</div></div></br></br></br>
<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
</div>
</body>
</html>