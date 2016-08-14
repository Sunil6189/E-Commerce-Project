  <?php require_once("includes/db.php");
session_start(); 
if(!isset($_SESSION['cartid']))
	{
		$_SESSION['cartid']=time();	
	}
	
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>About Us: Tech Solution</title>
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
About Us                </div>
 <!--title end-->

<div style="display: inline-block; width: 100%; font-size:12px;">
  <p> <b>TECH SOLUTION PROVIDES BEST QUALITY COMPUTER, LAPTOP, AND MOBILE REPAIR SERVICE FOR YOUR HOME AND BUSINESS.<b></p>
  <h2><strong><u>Features</u></strong></h2>
  <ul>
    <li><p><h3>COMPUTER AND LAPTOP SERVICE </h3><b>We deal with all sorts of computer and laptop service like virus removal, upgrade, Data recovery, Parts replacement or OS re-install.We are the one stop for it <b></p></li>
   <li><p><h3>SMARTPHONES REPAIR </h3><b>Is your phone feeling sick ,Bring it to us .Tech solution deal with all kind of mobile and mobile issues like Parts replacement ,screen replacement or any button replacement .<b></p></li>
   <li><p><h3>Web Development</h3><b>Tech solution provide wide range of websites  development for small to large business at BEST PRICE, We are specialized in content management system which helps the clients to manage their website .<b></p></li>
  </ul>
</div>

 

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 