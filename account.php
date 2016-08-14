<?php if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");
?>
<?php

require_once("includes/db.php");
$id=$_SESSION['userid'];

									$q="select * from users where id=".$id;
									$rset=mysqli_query($link,$q);
									$row=mysqli_fetch_array($rset);
								$fname=$row['fname'];
								$lname=$row['lname'];
								$email=$row['email'];
								$address=$row['address'];
								$telephone=$row['telephone'];
								$pincode=$row['pincode'];
									?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<title><?php echo $fname." ".$lname; ?>Account:: Tech Solution</title>



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
                <?php echo "ACCOUNT DETAILS......"; ?>
                </div>
 <!--title end-->

 <div style="background-color:#FFF; height:auto;">
 

      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">



<form method="post" enctype="multipart/form-data" name="viewUser">

<table width=100% height="204" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="83" height="40" align="left">Name</td>
    <td width="5">:</td>
    <td width="287"><?php echo $fname."&nbsp;".$lname;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Email</td>
    <td>:</td>
    <td><?php echo $email;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Mobile Number</td>
    <td>:</td>
    <td><?php echo $telephone;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Address</td>
    <td>:</td>
    <td><?php echo $address;?></td>
  </tr>
  <tr>
    <td height="38" align="left">Pincode</td>
    <td>:</td>
    <td><?php echo $pincode;?></td>
  </tr>
  
  </table>
  <div class="buttons">
        <table>
         <tr>
             <td align="center"><input type="button" class="button" value="Your Orders" onClick="window.location='user_orders.php?id=<?php echo $id; ?>'" /></td>
           
          </tr>
      </table>
      </div>
</form>
           
      </div> 
     
       
        
</div>

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 