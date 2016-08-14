
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>Signup::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:900px; margin:auto;">
<form id="form1" method="post" action="insert.php">
             
                <table align="center" width="344" height="260" border="0">
               
                  <tr>
                    <td width="180"> <div style="color:#000000"><b>
         Admin:</b></div></td>
                    <td>
                    <input type="text" name="admin"  required /></td>
                  </tr>
                                  
                  <tr>
                    <td><div style="color:#000000"><b>Password:</b></div></td>
                    <td>
                    <input type="password" name="password"  required/></td>
                  </tr>
                  <tr>
                  
                   
                  
                                    <tr>
                
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" id="button" value="Submit" onClick="Validate()" /></td>
                  </tr>
                </table>
              </form>
              </div></div>
<!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
</div>
</body>
</html>