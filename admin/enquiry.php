
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>User Enquiry::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="clear:both"></div>
<div id="content">
    <div class="top">
    <div class="left"></div>

    <div class="right"></div>
    
    
      <div style="width:620px;" class="middle">
            
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
             <table width=100% height="280" border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">User Enquiry<hr/></caption>
            
               
                  <tr>
                    <th width="100" align="center" valign="top"> Name</th>
                    <th width="200" align="center" valign="top"> Email</th>
                    <th width="300" align="center" valign="top"> Enquiry</th>
                    <th width="50" align="center" valign="top" colspan="2" > Action</th>
                   </tr>
                   
           <?php
require_once("../includes/db.php");

	$query="select * from contact"; 
	 $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  {
?>
<tr>
    <td align="center"><?php echo $row['name'];?></td>
       <td align="center"><?php echo $row['email'];?></td>
         <td align="center"><?php echo $row['enquiry'];?></td>
         <td align="center"><form>
         <input type="button" name="reply" class="button" value="reply" onclick='window.location="mail.php?email=<?php echo $row['email'];?>"'/></form>
         </td>
         <td align='center'><form><input type='button' name='submit' class='button' value='Delete' onclick="window.location='delenquiry.php?email=<?php echo $row['email'];?>'"/></form></td>
         
              </tr>
              
              <?php
  }
               
            ?>
                  </table>
        </div></div></br></br></br>
        <!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
</body>
</html> 
