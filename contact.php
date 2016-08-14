<?php
 require_once("includes/db.php");
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
<title>Contact Us: Tech Solution</title>
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
             Contact Us
                </div>
 <!--title end-->


<div style="display: inline-block; width: 100%;">
          <div class="content"><b>Address:</b><br>
             374 High Street<br>
			 Hutt Central,Lower Hutt <br>
			 New Zealnd,5010</div>
          <div class="content">

                        <b>Telephone:</b> +64 4-576 9216
            <br><b>Email:</b > info@techsolution.co.nz
            </br>
                                 
        </div>
    
      <div class="content">
        <form action="enquiry.php" method="Post">
        <table width="100%">

        <tbody><tr>
            <td>First Name:<br>
              <input name="name" value="" type="text" required="required">
              </td>
          </tr>
          <tr>
            <td>E-Mail Address:<br>
              <input name="email" value="" type="text" required="required">

              </td>
          </tr>
          <tr>
            <td>Enquiry:<br>
              <textarea name="enquiry" style="width: 99%;" rows="10" required="required"></textarea>
              </td>
          </tr>
          
        </tbody>
       
        </table>
      </div>
      <div class="buttons">

        <table>
          <tbody><tr>
            <td align="right"><input type="submit"  name="submit" class="button" value="submit"/></td>
          </tr>
        </tbody></table>
      </div>
    </form>
  </div>

 

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 