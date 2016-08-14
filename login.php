<?php session_start(); 
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();

}
require_once("includes/db.php");

if (isset($_POST['login']))
 {
	 if(empty ($_POST['email']) or empty($_POST['password']))
	 {
		 $error="Email Id or Password Required";	
	 }
	 
	else 
	{
		$u=mysqli_real_escape_string($link,$_POST['email']);
		$p=mysqli_real_escape_string($link,$_POST['password']);
	
		
		$SQL="select * from users where email='$u' and password='$p'";
		$result=mysqli_query($link,$SQL);
		$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1)
	{
		if(!isset($_SESSION['userid']))
	{
	$_SESSION['userid']=$row['id'];
				
	}
	      
		header("location:index.php");
	}
	else
	{
		$error="Incorrect Email or Password";
	}

	}

 }





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Login : Tech Solution</title>
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
               Account login
                </div>
 <!--title end-->

<div class="middle">
            <div style="margin-bottom: 10px; display: inline-block; width: 100%;">
      <div style="float: left; display: inline-block; width: 49%;">
      <b style="margin-bottom: 2px; display: block;">I am a new customer.</b>
        <div class="content_box" style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221); padding: 10px; min-height: 210px;">
          <form action="login.php" method="post" enctype="multipart/form-data" id="account">
            <p style="font-size:14px; font-weight:bold;">Checkout Options:</p>
            <label for="register" style="cursor: pointer;">
                            <input name="account" value="register" id="register" checked="checked" type="radio">

                            <b style="font-size:12px;">Register Account</b></label>
            
            <p style="font-size:12px;">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <div style="text-align: left; margin-top: 15px;"><input type="button" onclick="location = 'register.php'" value="Continue" class="button" /></div>
          </form>
        </div>

      </div>
      <div style="float: right; display: inline-block; width: 49%;"><b style="margin-bottom: 2px; display: block;">Returning Customer</b>
        <div class="content_box" style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221); padding: 10px; min-height: 210px;">
          <form action="login.php" method="post" enctype="multipart/form-data" id="login">
            I am a returning customer.<br>
        
            <b style="font-size:12px;">E-Mail Address:</b><br>

            <input name="email" type="text">
          <br />
            <b style="font-size:12px;">Password:</b><br>
            <input name="password" type="password">
         
            <div style="text-decoration:blink; color:#F00;"><?php if(isset($error)) {echo $error;} ?></div>
            <div style="text-align: left; margin-top: 10px;"><input type="submit" name="login" value="Log In" class="button"/></div>
              </form><div style="text-align: left; margin-top: 6px;"><a style="padding:5px;" href="forgotPassword.php">Forgot Password</a></div>
                                      
        </div>
      </div>
    </div>
  </div>








<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 