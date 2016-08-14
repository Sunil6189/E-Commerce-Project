<?php if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");
if(isset($_POST['submit']))
{

	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$postal_address=$_POST['postal_address'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
	$Cpassword=$_POST['confirm'];
	$enter="select email from users";
	$result=mysqli_query($link,$enter);
	while($row=mysqli_fetch_array($result))
	{
		if($email==$row['email'])
		{
 	
		echo "<script type='text/javascript'>
		
		alert('This Email is already Exist so you have not Successfully registered!!!');
		
		window.location='register.php';
		</script>";
		}
	}
	if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($telephone)&&!empty($postal_address)&&!empty($pincode))
	{
	if($password==$Cpassword)
	{
								
	$enter="insert into users(`fname`,`lname`,`email`,`telephone`,`address`,`pincode`,`password`) values('$fname','$lname','$email','$telephone','$postal_address','$pincode','$password')";
	
	mysqli_query($link,$enter);
 	
	if(mysqli_affected_rows($link)>0)
	{
		echo "<script type='text/javascript'>
		
		alert('You have Successfully registered!!!!');
		
		window.location='login.php';
		</script>";
	}
	else
	{ 
	
		$status=mysqli_error();
		mysqli_close($link);
		echo "<script type='text/javascript'>
		
		alert('You have not Successfully registered!!!! plz try again');
		
		window.location='register.php';
		</script>";
	}
	}
	else
	{
		$status="password not confirmed";
		}
	}
	else
	{
		$status="All the fields are mendatory";
		
		}

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Register: Tech Solution</title>
<script type="text/javascript">
function validate_name()
{
	
	var name =  document.getElementById("fname").value;
	if(name=='?'|| name=='!'|| name=='@' || name=='#' || name=='$' || name=='%' || name=='^' || name=='&' || name=='*' || name==0 || name==1 || name==2 || name==3|| name==4 || name==5|| name==6|| name==7|| name==8|| name==9)
	{
		
		alert("Name could not start with Special characters except: _");
		document.getElementById("fname").value="";
		}
	
}


}  
</script>
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
              Register Here....
                </div>
 <!--title end-->
<form action="register.php" method="post" enctype="multipart/form-data" id="create">
      <p style="font-size:12px;">If you already have an account with us, please login at the
       <a href="login.php" style="font-size:12px;">login page</a>.</p>
      <b style="margin-bottom: 2px; display: block; font-size:12px">Your Personal Details</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
        <table>
          <tbody><tr>
            <td width="150"><span class="required">*</span> First Name:</td>

            <td><input name="fname" id="fname" value="" type="text" onkeyup="validate_name()">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Last Name:</td>
            <td><input name="lname" value="" type="text" required="required">
              </td>

          </tr>
          <tr>
            <td><span class="required">*</span> E-Mail:</td>
            <td><input type="email" name="email" id="email" value="" required="required">
              </td>
          </tr>
          <tr>

            <td><span class="required">*</span> Telephone:</td>
            <td><input name="telephone" value="" type="text" required="required" pattern="^\d{10}$" title="enter 10 digit phone number">
              </td>
          </tr>
          
        </tbody></table>
      </div>
      <b style="margin-bottom: 2px; display: block;">Your Address</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221);font-size:12px; padding: 10px; margin-bottom: 10px;">
        <table>
          <tbody>
          <tr>
            <td><span class="required">*</span>Postal Address :</td>
            <td><textarea name="postal_address" required="required" ></textarea>
              </td>
          </tr>

         
          <tr>
            <td><span class="required">*</span> Pin Code:</td>
            <td><input name="pincode" value="" type="text" required="required" pattern="^\d{4}$" title="enter 4 digit pin code">
			  </td>
          </tr>

          
        </tbody></table>
      </div>
      <b style="margin-bottom: 2px; display: block;">Your Password</b>
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247); font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
        <table>
          <tbody><tr>

            <td width="150"><span class="required">*</span> Password:</td>
            <td><input name="password" value="" type="password" required="required">
              </td>
          </tr>
          <tr>
            <td><span class="required">*</span> Password Confirm:</td>

            <td><input name="confirm" value="" type="password" required="required">
              </td>
          </tr>
          
        </tbody></table>
      </div>
         
            <div class="buttons">
        <table>
          <tbody><tr>
            
            <td align="right" width="5"><input type="submit" name="submit" value="Register" class="button"></td>
          </tr>
        </tbody></table>
      </div>
          </form>
    <div style="background:#FFF; font-size:12px; text-decoration:blink; color:#000;">
    <?php if(isset($status))
	{
		echo "<script type='text/javascript'>
		
		alert('".$status."');
		
		</script>";}?>
    </div>      


<!--footer-->
<?php include("footer.php");?> 
<!-- footer end-->
</div>
</body></html> 