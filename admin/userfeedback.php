
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../stylesheet/stylesheet.css" />

<title>User Feedback::Admin Panel</title>
</head>

<body>

<div id="container">

<?php include("adminHeader.php"); ?>
<div style="clear:both"></div>
<div style="height:40px; background:#FFF;"></div>
      <div style="width:800px; margin:auto;">
 <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247);font-size:12px; border: 1px solid rgb(221, 221, 221); padding: 10px; margin-bottom: 10px;">

             <table width=100% height="280" border='0' align='center' cellpadding='2' cellspacing='2'>
<caption><b style="margin-bottom: 2px; display: block; font-size:13px">User Feedback<hr/></caption>
            
               
                  <tr>
                    <th align="center"> Name</th>
                    <th align="center"> Email</th>
                    <th align="center"> Grade</th>
                    <th align="center"> Media</th>
                    <th align="center"> Visit Again</th>
                    <th align="center"> Suggestion</th>
                     <th align="center"> Action</th>
                  </tr>
                   
           <?php
require_once("../includes/db.php");

	$query="select * from feedback"; 
	 $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  {
?>
<tr>
    <td align="center"><?php echo $row['Name'];?></td>
       <td align="center"><?php echo $row['Email'];?></td>
         <td align="center"><?php echo $row['Comparison'];?></td>
           <td align="center"><?php echo $row['Media'];?></td>
             <td align="center"><?php echo $row['Visit'];?></td>  
              <td align="center"><?php echo $row['Suggestion'];?></td>
               <td align='center'><form><input type='button' name='submit' class='button' value='Delete' onClick="window.location='delfeedback.php?email=<?php echo $row['Email'];?>'"/></form></td>
              </tr>
              
              <?php
  }
               
            ?>
                  </table>
     
     </div></div></br></br></br>
     <!--footer-->
<?php include("adminfooter.php");?>
<!-- footer end-->
     </div>
</body>
</html> 
