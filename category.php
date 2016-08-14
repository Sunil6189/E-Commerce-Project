 
 <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");?>
     <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<title><?php echo $_GET['category'];?> Product : Tech Soultion</title>
</head>
<body>

<div id="container">

<?php include("header.php"); 
include("leftbar.php");
include("rightbar.php");?>

<div style="width:600px; margin:auto;">
<!--title-->
                <div style="background:#fff;padding: 8px 0px 7px 0px;
	border-bottom:1px solid #dcdcdc; height:30px; font-size:20px; text-align:left; color:#000;">
                <?php echo $_GET['category'];?>
                </div>
 <!--title end-->
 <div style="background-color:#FFF; height:auto;">
 <?php 

$table="<table class='list'><tr>";
		  $q="select * from product where `category`='".$_GET['category']."' order by `Product_id` desc ";
			$result=mysqli_query($link,$q);
			 $i=1; 
       while($i<16)
		   {
			   if($i%4!=0)
			   {
				   $row=mysqli_fetch_array($result);
				   if($row['product_name']=='')
				   {
		   			$table=$table."</tr>";
			        break;
					}
				   	
				   $table=$table."<td style='width: 33%;'>      <div class='prod_wrap'>

      <div class='prod_name' style='width: 176px; height: 30px;'><a style='color: #333; font-weight: bold; font-size: 12px; ' href='product_info.php?title=".urlencode($row['product_name'])."'>".$row['product_name']."</a></div>
         <a class='prod_snimka' href='product_info.php?title=".urlencode($row['product_name'])."'><img src='products/".$row['image']."' width='180' height='150'  title='".$row['product_name']."' alt='".$row['product_name']."' /></a>
         
         <div>
               <span style='color: #000; font-size: 11px;'>Product : ".$row['product_id']."</span><br />
                  <center><div  class='pricetag'>$".$row['price']."</div></center>
         
         </div>
      </div>
      
      </td>";
			 $i++;
			 }
		else
		{
			$table=$table."</tr>";
			$i++;
			}
	   }
           
     $table=$table."</table>";
	 echo $table;
	 
	 ?>
 
 
 
 
 
 </div>

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 