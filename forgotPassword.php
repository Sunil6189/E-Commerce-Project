<?php session_start(); 
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();

}
require_once("includes/db.php");
if(isset($_POST['submit']))
{

$email=$_POST['email'];

		$SQL="select * from users where email='$email'";
		$result=mysqli_query($link,$SQL);
		$count= mysqli_num_rows($result);
		if($count>0)
		{
		$row=mysqli_fetch_array($result);
		$password=$row['password'];

            $message = "Your password to login into Tech solution website";
            $to=$email;
            $subject="Forget Password";
            $from = 'info@techsolution.co.nz';
            $body='Hi, <br/> <br/>Your username ID is '.$email.' <br><br>Your password is '.$password.' <br>';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);
			echo "<script type='text/javascript'>
		
		     alert('Check your email account for the Password!!!!');
		
		    window.location='login.php';
		    </script>";
        }
		else
		{
		
			echo "<script type='text/javascript'>
		
		   alert('Account not found please signup now!!');
		
		     window.location='register.php';
		     window.location='register.php';
		    </script>";
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript">

</script>
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
              Reset Password
                </div>
 <!--title end-->
<div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
            
    
          <form  method="post" enctype="multipart/form-data" id="resetpassword">
           <br/>
        <b>Enter your Email Id..<br>
		</br>
            <b style="font-size:12px;">E-Mail Address:</b>&nbsp;&nbsp; <input name="email" type="email" autocomplete="off" required="required" ><br></br>

            <div style="text-align: left; margin-top: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit" value="Reset Password" class="button"/></div>
          <br />
      
       
    </div>
  </div>

<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 