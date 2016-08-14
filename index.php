 <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();;
}

require_once("includes/db.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Tech Solution</title>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />

    <style type="text/css">.amazingslider-wrapper-0 {display:block;position:relative;width:100%;height:auto;}.amazingslider-slider-0 {display:block;position:relative;left:0px;top:0px;width:100%;height:auto;}.amazingslider-box-0 {display:block;position:relative;left:0px;top:0px;width:100%;height:auto;}.amazingslider-swipe-box-0 {display:block;position:relative;left:0px;top:0px;width:100%;height:auto;}.amazingslider-space-0 {display:block;position:relative;left:0px;top:0px;width:100%;height:auto;visibility:hidden;line-height:0px;font-size:0px;}.amazingslider-img-box-0 {display:block;position:absolute;left:0px;top:0px;width:100%;height:100%;}.amazingslider-play-0 {display:none;position:absolute;left:50%;top:50%;cursor:pointer;width:64px;height:64px;margin-top:-32px;margin-left:-32px; background:url('http://localhost/project1/sliderengine/playvideo-64-64-0.png') no-repeat left top;}.amazingslider-video-wrapper-0 {display:none;position:absolute;left:0px;top:0px;background-color:#000;text-align:center;}.amazingslider-error-0 {display:block;position:relative;margin:0 auto;width:80%;top:50%;color:#fff;font:16px Arial,Tahoma,Helvetica,sans-serif;}.amazingslider-watermark-0 {display:block;position:absolute;bottom:6px;right:6px;font:12px Arial,Tahoma,Helvetica,sans-serif;color:#666;padding:2px 4px;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;background-color:#fff;opacity:0.9;filter:alpha(opacity=90);cursor:pointer;}.amazingslider-video-wrapper-0 video {max-width:100%;height:auto;}.amazingslider-video-wrapper-0 iframe, .amazingslider-video-wrapper-0 object, .amazingslider-video-wrapper-0 embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>


<style type="text/css">.amazingslider-text-0 {display:block; padding:12px; text-align:left;} .amazingslider-text-bg-0 {display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);} .amazingslider-title-0 {display:block; position:relative; font:16px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;} .amazingslider-description-0 {display:block; position:relative; margin-top:4px; font:14px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;} </style>



</head>
<body>

<div id="container">

<?php include("header.php"); 
include("leftbar.php");
include("rightbar.php");?>


<div id="content">
    <div class="top">
    <div class="left"></div>

    <div class="right"></div>
    <div class="center">
      <h1>Welcome to Tech Solution</h1>
    </div>
  </div>
  

   
    
  
  
  
    <div class="bottom">
    <div class="left"></div>
    <div class="right"></div>
    <div class="center"></div>
  </div>
      <div class="top">
  <div class="left"></div>

  <div class="right"></div>
  <div class="center">
    <div class="heading">Latest Products</div>
  </div>
</div>

<div class="middle">
<?php 

$table="<table class='list'><tr>";
		  $q="select * from product order by `Product_ID` desc LIMIT 0,14";
			$result=mysqli_query($link,$q);
			 $i=1; 
       while($i<16)
		   {
			   if($i%4!=0)
			   {
				   $row=mysqli_fetch_array($result);
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