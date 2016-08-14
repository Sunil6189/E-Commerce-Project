
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
<title>Privacy Policy : Tech Solution</title>
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
             Privacy Policy
                </div>
 <!--title end-->

<div style="display: inline-block; width: 100%; font-size:12px;">
 </p>
<p>This page explains the type of information that is collected by Tech Solution, how such information is used, and under what circumstances and to whom it may be disclosed. </p>
<h3>Tech Solution</h3><p>The sites <a href="index.php" style="text-decoration:none;">www.techsolution.com </a>is brought to you by Tech Solution Pvt. Ltd  trading as Tech Shop. Shopper_Land is fully committed to protecting your privacy and security,</p>
<p>If you have any questions about our Privacy Policy, please feel free to <a href="contact.php" style="text-decoration:none;">contact us</a> through our website</p>

<p>&nbsp;</p>
<p><strong>Information collected</strong></p>
<p>Collecting your information allows us to send you updates via email and provide a better user experience, including customising content for you.</p>
<ul>
<li><strong>Your email address</strong> - Tech Solution will only record your email address in the event that you send a message by email or subscribe to get updates by email. 
If you do not want your email address to be recorded by Tech Solution you can send postal mail to the address above. Your email address will only be used 
for the purpose for which you have provided it and will not be added to any mailing lists without your prior consent which Tech Solution will seek by way of a 
specific request in writing. Tech Solution will not use or disclose your email address for any other purpose, without your prior written consent.<br><br></li>
<li><strong>Log Information</strong> - When you visit our Sites our Internet servers automatically record information that your browser sends whenever 
you visit. These server logs may include information such as your web request, Internet Protocol address, browser type, browser language, the date and time of 
your request and one or more cookies that may uniquely identify your browser. </li></ul>

<p>&nbsp;</p>
<p><strong>Information disclosed</strong></p>
<p>Information provided to Tech Solution only be used for the purpose for which you have provided it and not disclosed to any other party unless stated as otherwise.</p>
<p>&nbsp;</p>
<p><strong>Other sites</strong></p>
<p>This Privacy Policy applies to web sites and services that are owned and operated by Tech Solution. We do not exercise control over the sites displayed 
as search results or links from within our various services. These other sites may place their own cookies or other files on your computer, collect data or solicit personal information from you.</p>
<p><br><strong>Changes to this policy</strong></p>
<p>This Privacy Policy may change from time to time. We will not reduce your rights under this Policy without your explicit consent, and we expect most such 
changes will be minor. Each version of this Policy will be identified at the top of the page by its effective date.</p>
<p>&nbsp;</p>
  </div>

 

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 