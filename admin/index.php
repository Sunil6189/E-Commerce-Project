	
<?php
session_start();
require_once("../includes/db.php");
if (isset($_POST['login']))
 {
	 $name=$_POST['username'];
  $pass=$_POST['password'];
  $query="select * from admin where name='$name'";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  {
 	if(($name==$row['name'])&&($pass==$row['password']))
{
	
		$_SESSION['userid']=$row['id'];
	?>
    <script>
	alert("login Successfully");
	window.location="viewProduct.php";
	</script>
    <?php
}
else
{
?>
<script>
	alert("Invalid Username and Password");
	window.location="index.php";
	</script>

<?php
}
	}
	
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Login::Admin Panel</title>
</head>

<body>


<div id="container">


      <div style="width:500px; margin:auto; margin-top:20px;">
            
      <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">
<form method="post" ><table width=72% height="116"  border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">Administrator Login</b><hr /></caption>
<tr><td align="center">USERNAME</td>
<td align="center">:</td>
<td><input type="text" name="username"/></td>
</tr>
     <tr>
       <td align="center">PASSWORD</td>
       <td align="center">:</td>
       <td><input type="password" name="password"/></td>
       </tr>
     <tr>
       <td colspan="3" align="center"><input type="submit" name="login" class="button" id="button" value="Login"></td>
       </tr>
     </table>
	
</form>
</div></div>
<div align="center" style="background:#fff; height:30px; text-decoration:blink; color:#000;"><?php if(isset($error))
{echo $error;}?></div>

</div>

</body>
</html>