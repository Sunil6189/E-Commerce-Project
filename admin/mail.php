
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Mail::Admin Panel</title>
</head>

<body>

<div id="container">
<?php
 include("adminHeader.php");
error_reporting(0);
$email=$_GET['email'];
require_once("../includes/db.php");
 if(isset($_POST['send']))
{
$to=$_POST['to'];
$from=$_POST['from'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
// ini_set("connect",25); 
  
mail($to,$sub,$msg,$from);
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br></br><i><font color='red'>Your mail has been sent.........</font></i>";
}
?>


<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:500px; margin:auto;">
 <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">

             <table width=100% height="280" border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">Send Email<hr/></caption>
            
               <form method="post"><tr>
               <td width='200'>To </td> <td width='150'>:</td>
             <td width='400'>  <input type="text" value="<?php echo $email;?>" name="to"/></td>
               </tr>
               <tr>
               <td width='200'>From</td> <td width='150'>:</td>
               <td><input type="text" value="info@techsolution.co.nz" name="from"/></td>
               </tr>
               <tr>
               <td width='200'>Subject</td> <td width='150'>:</td>
               <td><textarea name="sub" rows=3 cols=19/></textarea></td>
               </tr>
               <tr>
               <td width='200'>Message</td> <td width='150'>:</td>
              <td> <textarea name="msg" rows=5 cols=19/></textarea></td>
               </tr>
                <tr>
               <td colspan=2 align="right">
               <input type="submit" name="send" value="Send" class="button" /></td>
                 <td align="center">
               <input type="button" name="back" value="Back" class="button" onclick='window.location="enquiry.php"'/></td>
               </tr>
               
               </form>
               </table>
              
        </div></br></br></br>
        <!--footer-->
<?php include("adminfooter.php");?>

<!-- footer end-->
</div>

</body>
</html> 
