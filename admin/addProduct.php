	
<?php
if(isset($_POST['submit']))
{
	require_once("../includes/db.php");

	
$product_name=$_POST['name'];
$product_category=$_POST['category_text'];
$product_description=$_POST['description'];
$product_price=$_POST['price'];
$product_quantity=$_POST['quantity'];
$product_manufacturer=$_POST['manufacturer'];

$filename= basename($_FILES['pic']['name']); 
			  $extension = pathinfo($filename, PATHINFO_EXTENSION);
			  $id="product_".time();
				$product_pic=$id.".".$extension;	
	
$enter="insert into product(`product_name`,`price`,`category`,`quantity`,`manufacturer`,`image`,`description`) values('$product_name','$product_price','$product_category','$product_quantity','$product_manufacturer','$product_pic','$product_description')";

mysqli_query($link,$enter);
 	
    //upload pic to images        
       
			 $actual_path="../products/".$product_pic;

						 if(is_uploaded_file($_FILES['pic']['tmp_name']))
						{         
								if(move_uploaded_file($_FILES['pic']['tmp_name'],$actual_path))
								{
								$msg="Product Added Successfully";
								}
								else
								{
								$msg="MOVING FAILED";
								}
						}
						else
        				{
						 $msg="Error Occured";
						}
			
			 
	//uploading done





}
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
      <h1>Add Product</h1>
    </div>
  </div>
    <div class="bottom">&nbsp;</div>
    
    
      <div class="middle">
            <b style="margin-bottom: 2px; display: block; font-size:13px">Add Product Details</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">



<form method="post" enctype="multipart/form-data" name="addproduct">

<table width=100% height="434" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="83" height="40" align="left">Name</td>
    <td width="5">:</td>
    <td width="287"><input type="text" name="name" id="name" required="required"/></td>
  </tr>
  <tr>
    <td height="38" align="left" required="required">Price</td>
    <td>:</td>
    <td><input type="text" name="price" id="price" /></td>
  </tr>
  <tr>
    <td height="38" align="left" >Category</td>
    <td>:</td>
    <td><select name="category" id="category" onChange="cat()" >
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
    </select>      <input type="text" name="category_text" id="category_text" /></td>
  </tr>
  <tr>
    <td height="38" align="left">Quantity</td>
    <td>:</td>
    <td><input type="text" name="quantity" id="quantity" required="required" required="required"/></td>
  </tr>
  <tr>
    <td height="38" align="left">Manufacturer</td>
    <td>:</td>
    <td><input type="text" name="manufacturer" id="manufacturer" required="required"/></td>
  </tr>
  <tr>
    <td height="38" align="left">Description</td>
    <td>:</td>
    <td><textarea name="description" id="description" cols="45" rows="5" required="required"></textarea></td>
  </tr>
  <tr>
    <td height="38" align="left">Image</td>
    <td>:</td>
    <td><input type="file" name="pic" id="pic" required="required"/></td>
  </tr></table>
  <div class="buttons">
        <table>
          <tbody><tr>

           
            <td align="center"><input type="submit" name="submit" class="button" value="Add Product" /></td>
             <td align="center"><input type="reset" class="button" value="Reset" /></td>
           
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
</div></br></br>

<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->

</div>
</body>
</html>