	
<?php
require_once("../includes/db.php");

	$product_id=$_GET['id'];
	
		$q="select * from product where product_id='".$product_id."'";
									$rset=mysqli_query($link,$q);
									$row=mysqli_fetch_array($rset);
								$price=$row['price'];
								$quantity=$row['quantity'];
								$category=$row['category'];
								$manufacturer=$row['manufacturer'];
								$name=$row['product_name'];
								$description=$row['description'];
	
	
if(isset($_POST['edit']))
{
	
	require_once("../includes/db.php");
$product_name=$_POST['name'];
$product_category=$_POST['category_text'];
$product_description=$_POST['description'];
$product_price=$_POST['price'];
$product_quantity=$_POST['quantity'];
$product_manufacturer=$_POST['manufacturer'];

$enter="update `product` set 
`product_name`='$product_name',
`price`='$product_price',
`category`='$product_category',
`quantity`='$product_quantity',
`manufacturer`='$product_manufacturer',
`description`='$product_description' where `product_id`='".$_GET['id']."'";
mysqli_query($link,$enter);
 	
   if(mysqli_affected_rows($link)>0)
   {
	   header("location:viewProduct.php");
	   
	   }}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

function cat()
{
	var cat = document.getElementById('category').value;
	
	document.getElementById('category_text').value=cat;

	}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Edit Product::Admin Panel</title>
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
      <h1>Edit Product</h1>
    </div>
  </div>
    <div class="bottom">&nbsp;</div>
    
    
      <div class="middle">
            <b style="margin-bottom: 2px; display: block; font-size:13px">Edit Product Details</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">



<form method="post" enctype="multipart/form-data" name="editproduct">

<table width=100% height="434" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="83" height="40" align="left">Name</td>
    <td width="5">:</td>
    <td width="287"><input type="text" name="name" id="name" required="required" value="<?php echo $name; ?>"/></td>
  </tr>
  <tr>
    <td height="38" align="left">Price</td>
    <td>:</td>
    <td><input type="text" name="price" id="price" required="required" value="<?php echo $price; ?>" /></td>
  </tr>
  <tr>
    <td height="38" align="left">Category</td>
    <td>:</td>
    <td><select name="category" id="category" onChange="cat()">
    <option value="select">select category</option>
    <?php 
require_once("../includes/db.php");
	$sql="select distinct category from product;";
	 $result=mysqli_query($link,$sql);
	  while($row=mysqli_fetch_array($result))
	{
		echo "<option value='".$row['category']."'>".$row['category']."</option>";
		
		}
		mysqli_close($link);
	?>
    </select>      <input type="text" name="category_text" id="category_text" value="<?php echo $category; ?>"/></td>
  </tr>
  <tr>
    <td height="38" align="left" >Quantity</td>
    <td>:</td>
    <td><input type="text" name="quantity" id="quantity" required="required" value="<?php echo $quantity; ?>"/></td>
  </tr>
  <tr>
    <td height="38" align="left">Manufacturer</td>
    <td>:</td>
    <td><input type="text" name="manufacturer" id="manufacturer" required="required" value="<?php echo $manufacturer; ?>"/></td>
  </tr>
  <tr>
    <td height="38" align="left">Description</td>
    <td>:</td>
    <td><textarea name="description" id="description" required="required" cols="45" rows="5" ><?php echo $description; ?></textarea></td>
  </tr>
  
  </table>
  <div class="buttons">
        <table>
         <tr>

           
            <td align="center"><input type="submit" name="edit" class="button" value="Update" /></td>
             <td align="center"><input type="button" class="button" value="Cancel" onClick="window.location='viewProduct.php'" /></td>
           
          </tr>
      </table>
      </div>
</form>
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
<!-- footer end-->


</div>
</body>
</html>