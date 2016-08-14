<?php session_start(); 
if(!isset($_SESSION['cartid']))
	{
		$_SESSION['cartid']=time();	
	}
 require_once("includes/db.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<title>Feedback: Tech Solution</title>
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
             Feedback
                </div></br>
 <!--title end-->

<div style="display: inline-block; width: 100%;">

  <div class="content">
              <form id="form1" method="post" action="feedbackconn.php">
             
                <table align="center" width="324" height="460" border="0">
               
                  <tr>
                    <td width="220"> 
         Enter Your Name:</td>
         
                    <td>
                    <input type="text" name="name" required="required" /></td>
                  </tr>
                  <tr>
                    <td>Enter Your Email:</td>
                    <td>
                    <input type="email" name="email" required="required"/></td>
                  </tr>
                  <tr>
                    <td colspan="2">Q1) How you compare our website with others?</td></tr>
                    <tr>
            <td colspan=2>
             
                <input type="radio" name="r1" value="excellent" />
                Excellent &nbsp;&nbsp;
              
             
                <input type="radio" name="r1" value=" vgood" />
                Very good&nbsp;&nbsp;
            
              
                <input type="radio" name="r1" value="good " />
                Good&nbsp;&nbsp;
           
                <input type="radio" name="r1" value="average" />
                Average&nbsp;&nbsp;
              </br >
            </td>
          </tr>
          
                  <tr>
                    <td colspan="2">Q2) How you come to know about over website?</td>
                    </tr>
                    <tr>
                    <td colspan="2">
                <input type="radio" name="r2" value="tv"  />
                TV&nbsp;&nbsp;
       
           
                <input type="radio" name="r2" value="friend" />
                Friend&nbsp;&nbsp;
      
            
                <input type="radio" name="r2" value="newspaper" />
                Newspaper&nbsp;&nbsp;
      
                <input type="radio" name="r2" value="other" />
                Other&nbsp;&nbsp;
              </br>
            
                    </td>
                    </tr>
                  <tr>
                    <td colspan="2">Q3) Would you like to visit our website again?</td>
                   </tr>
                   
                    <tr>
                    <td colspan="2">
                  
                <input type="radio" name="r3" value="yes" id="r3_0" />
                Yes &nbsp;&nbsp;
                          
                <input type="radio" name="r3" value="no" id="r3_1" />
                No &nbsp;&nbsp;
              </br> 
                   </td>
                   </tr>
                  <tr>
                    <td colspan="2">Q4) Suggestion or comment if any?</td>
                     </tr>
                  <tr>
                    <td colspan="2">
              
              <textarea name="suggestion"  cols="45" rows="5" required="required"></textarea></td></tr>
           <tr>
                    <td align="right" colspan="2"><input type="submit" name="submit" class="button" value="Submit"  /></td>
                  </tr>
                </table>
              </form>
            </div>

       
                    
                    
</div>
<!--footer-->
<?php include("footer.php");?>
<!-- footer end-->
</div>
</body></html> 