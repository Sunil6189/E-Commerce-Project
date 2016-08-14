<?php
require_once("../includes/db.php");

if (isset($_POST['submit']))
{
	
	$oldpassword=$_POST['old'];
	$newpassword=$_POST['new'];
	$confirmpassword=$_POST['confirm'];
	$query="select * from admin where id=1"; 
	$result=mysqli_query($link,$query);
     $row=mysqli_fetch_array($result);
	 $dbasepassword=$row['password'];

		if($oldpassword==$dbasepassword)
		{
			if($newpassword==$confirmpassword)
			{ 
				$query="update admin set password='$newpassword' where id=1";
				$result=mysqli_query($link,$query);
				if($result=='1')
				{
					?>
						<script>
						alert(" Password Successfully updated & Now Login With  your New Password");
						window.location="index.php";
						</script>
    					<?php
				}
	
				else
				{
					?>
					<script>
					alert("unsuccessfull updation please try again ");
					
					</script>
    				<?php
				}
			}
			else
			{
				?>
					<script>
					alert("New password and Confirm password does not match");
					window.location="changepassword.php";
					</script>
    				<?php
			}
		}	
		else
		{		
			?>
					<script>
					alert("Old password is not correct");
					window.location="changepassword.php";
					</script>
    				<?php
		}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Privacy::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:600px; margin:auto;">
 <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
<form name="enquire" method="Post"> 
             <table width=88% height="280" border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">Change Password<hr/></caption>
            
               
                  <tr>
                    <td width="180"> <div style="color:#000000">
         Old Password</div></td>
         <td>:</td>
                    <td>
                    <input type="password" name="old"  required="required" /></td>
                  </tr>
                     <tr>
                    <td><div style="color:#000000">New Password</div></td>
                    <td>:</td>
                    <td>
                    <input type="password" name="new" required="required"  /></td>
                  </tr>
               
                 
                  <tr>
                    <td><div style="color:#000000">Confirm Password</div></td><td>:</td>
                    <td>
                    <input type="password" name="confirm" required="required"   /></td>
                  </tr>
               
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" class='button' name="submit"  value="Submit"/></td>
                  </tr>
                </table>
                </div>
              </form>
           
            
        </div></br></br></br>
        <!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
</div>
</body>
</html> 
