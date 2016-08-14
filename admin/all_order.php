<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

           function remove(id)
{
	var r=confirm("Do You Really Want To Delete This Order");
	
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
xmlhttp.open("GET","deleteOrder.php?id="+remove_id,true);//to send request to server
xmlhttp.send();
	
  }
  
  
	}
	function modify(id)
	
  {

	  var r=confirm("Do You Really Want To Update this Order");
if (r==true)
  {	  	 
 window.location = "editOrder.php?id="+id;
	
  }
  
	  
	  }
  
 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Order Status::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:1000px; margin:auto;">
            
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
<table width=100% border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">Orders</b><hr /></caption>
<tr align="left"  style='font-size:14px;'>
 
          <th width="8%">Order Id</th>
          <th width="14%">Customer Id</th>
        <th width="16%">Delivery Address</th>
        <th width="10%">Amount</th>
        <th width="20%">Order status</th> 
		<th align="20%">View Order</th>
		<th align="20%">Delete Order</th>
   
        
          
        </tr>

<?php 
require_once("../includes/db.php");
  $q="select * from order_management";
			$result=mysqli_query($link,$q);
			
		
       while($row=mysqli_fetch_array($result))
		   {
			  
				  $order_id=$row['order_id'];
				
				  echo"<tr>

        <td align='left'>".$order_id."</td>

          <td align='center'>".$row['customer_id']."</td>
                   <td align='left'>".$row['delivery_address']."</td>
				    <td align='left'>".$row['amount']."</td>
                   <td align='left'>".$row['delivery_status']."</td>
					                
		   <td align='left'>
		  		   <input type='button' class='button' value='View Order' onclick='window.location=\"viewOrder.php?id=".$row['order_id']."\"' /></td>
				  <td><br> <form><input type='button' class='button' value='Delete Order' onclick='window.location=\"DeleteOrder.php?id=".$row['order_id']."\"' /></form>
		    </td> 
		</tr>";
		
		
	   }
      ?>      
     </table>
	


</div></div></br></br></br>
<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
</div>
</body>
</html>