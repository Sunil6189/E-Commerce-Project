<?php
if (isset($_POST['submit']))
{
require_once("../includes/db.php");

	$pid=$_POST['p_search'];
	     $q="select * from product where product_id='".$pid."'";
		$rset=mysqli_query($link,$q);
        $row=mysqli_num_rows($rset);		
		if($row>=1)
		{
			?>
			<script>
			window.location="editProduct.php?id=<?php echo $pid ?> ";
			</script>
    		<?php
									
		}
		else{
			  ?>
			  <script>
						alert(" Product id does not exist");
						window.location="viewProduct.php";
						</script>
    		  <?php
		}

	}	
?>
	

   <html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>View Products::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:1000px; margin:auto;">
            
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
        <table width=100% border='0' align='center' cellpadding='2' cellspacing='2'>
        <tr  style='font-size:14px;'>
          <th align='left'><table width=100% border='0' align='center' cellpadding='2' cellspacing='2'>
            <caption>
              <b style="margin-bottom: 2px; display: block; font-size:13px">View Product Details</b>
              <hr />
              </caption>
            <tr><form name="search" method="post"><td style="color:#9D0043;">Search Product by ID : </td>
            <td><input type="text" name="p_search" id="p_search"  required="required"/></td> 
            <td><input type="submit" name="submit" id="submit" value="Search" class="button" /></td></form></tr>
            <tr  style='font-size:14px;'>
              <th align='left'>Name</th>
              <th align='left'>Image</th>
              <th align='left' width='130'>Model</th>
              <th align='left'>Category</th>
              <th align='center'>Modify</th>
              <th align='center'>Delete</th>
            </tr>
            <?php 
require_once("../includes/db.php");
  $q="select * from product";
			$result=mysqli_query($link,$q);
			
		
       while($row=mysqli_fetch_array($result))
		   {
			  ?>
				<tr>  
				  

        <td align='left'><?php echo $row['product_name'];?>
         </td>

          <td align='left'><img src='../products/<?php echo $row['image'];?>' width='50' height='50' alt='<?php echo $row['product_name'];?>'/></td>
		   <td align='left'>Product : <?php echo $row['product_id'];?></td>
          <td align='left'><?php echo $row['category'];?></td>
         
		   <td align='center'><form>
		  		   <input type='button' name='submit' class='button' value='Modify' onClick="window.location='editProduct.php?id=<?php echo $row['product_id'];?>'"/></form>
		    </td> 
		   <td align='center'><form><input type='button' name='submit' class='button' value='Delete' onClick="window.location='deleteProduct.php?id=<?php echo $row['product_id'];?>'"/></td></tr></form>
		
		<?php
	   }
      ?>
          </table></th>
        </tr>
        </table>
  </div></div></br></br></br>
<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
</div>
</body>
</html>