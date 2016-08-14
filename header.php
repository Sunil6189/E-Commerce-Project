
<!--header code-->
<div id="header">
  <div class="div1">

   
    <div class="div4">
    <a class="toplinks" href="index.php">Home</a>

		
		  <?php
         if(isset($_SESSION['userid']))
	 
	      {echo "<a href='account.php?id=".urlencode($_SESSION['userid'])."' class='toplinks'>Register</a>";
		 }
		 else
		 {
			 echo "<a href='register.php' class='toplinks'>Register</a>";
			 
			 }
         ?>  
           <?php
	 
	 if(isset($_SESSION['userid']))
		{
				 echo "<a href='account.php?id=".urlencode($_SESSION['userid'])."' class='toplinks'>Account</a>";
		 }
		 else
		 {
			 echo "<a href='login.php' class='toplinks'>Account</a>";
			 
			 }
		 
	  ?>
	   <a href='shoppingcart.php' class='toplinks'>View Cart</a>
	   <?php
	 
	 if(isset($_SESSION['userid']))
		{
				 echo "<a href='user_Order.php?id=".urlencode($_SESSION['userid'])."' class='toplinks'>Your Orders</a>";
		 }
		 else
		 {
			 echo "<a href='login.php' class='toplinks'>Your Orders</a>";
			 
			 }
		 
	  ?>
	  <?php
	 
	 if(isset($_SESSION['userid']))
		 
		{         
			require_once("includes/db.php");
            $id=$_SESSION['userid'];
			$q="select * from users where id=".$id;
			$rset=mysqli_query($link,$q);
			$row=mysqli_fetch_array($rset);
			$fname=$row['fname'];
			echo "<a href='logout.php' class='toplinks'>" . $fname . " ( Logout ) </a>";
		
			
		 }
		 else
		 {
			 echo "<a href='login.php' class='toplinks'>Login</a>";
			 
			 }
		 
	  ?> 
     
        
      </div>

  <div class="div2">
            <a href="index.php"><img src="images/shopper_logo.jpg" title="Your Store" alt="Your Store" /></a>
          </div>
    
       
        <div class="div222">
      
      	  <div class="menu">
          <script type="text/javascript" src="jquery/jquery.js"></script>
          <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
								$("#desktop").hover(function(){
									 $("#sub_components").slideUp("slow");	
									$("#sub_desktop").slideDown("slow");
								  });
										$("#components").hover(function(){
											 $("#sub_desktop").slideUp("slow");	
											$("#sub_components").slideDown("slow");
										  });
												  $("#laptop").hover(function(){
													 $("#sub_desktop").slideUp("slow");	
													$("#sub_components").slideUp("slow");
												  });
															  $("#phone").hover(function(){
																 $("#sub_desktop").slideUp("slow");	
																$("#sub_components").slideUp("slow");
															  });
																		 $("#camera").hover(function(){
																			 $("#sub_desktop").slideUp("slow");	
																			$("#sub_components").slideUp("slow");
																		  });
																					  $("#mp3").hover(function(){
																						 $("#sub_desktop").slideUp("slow");	
																						$("#sub_components").slideUp("slow");
																					  });
																							  $("#pc").hover(function(){
																								 $("#sub_pc").slideDown("slow");	
																								});
																									  $("#mac").hover(function(){
																										 $("#sub_pc").slideUp("slow");	
																										});
										  $("body").click(function(){
											$("#sub_desktop").slideUp("slow");
													$("#sub_components").slideUp("slow");	
													 $("#sub_comp").slideUp("slow");	
											$("#sub_desk").slideUp("slow");
										  });
  $("#comp").hover(function(){
	 $("#sub_comp").slideDown("slow");	
  $("#sub_desk").slideUp("slow");
  });
			  $("#desk").hover(function(){
				 $("#sub_comp").slideUp("slow");	
				$("#sub_desk").slideDown("slow");
			  });
					  
										$("#laptop_n").hover(function(){
										 $("#sub_desk").slideUp("slow");	
										$("#sub_comp").slideUp("slow");
									  });
											  $("#phone_n").hover(function(){
												 $("#sub_desk").slideUp("slow");	
												$("#sub_comp").slideUp("slow");
											  });
													 $("#camera_n").hover(function(){
														 $("#sub_desk").slideUp("slow");	
														$("#sub_comp").slideUp("slow");
													  });
															  $("#mp3_n").hover(function(){
																 $("#sub_desk").slideUp("slow");	
																$("#sub_comp").slideUp("slow");
															  });
});
</script>
<style>
.amazingslider-watermark-0{
	display:none;
}
</style>
	              <ul id="topnav">
                  	<li id="desktop"><a href="category.php?category=<?php echo urlencode("Desktops");?>">Desktops</a>
                  		
                     </li>
                     <li id="laptop"><a href="category.php?category=<?php echo urlencode("Laptops &amp; Notebooks");?>">Laptops &amp; Notebooks</a></li>
                     <li id="components"><a href="#">Components</a>
                     	<ul style="display:none;" id="sub_components" class="children">
                        	<li><a href="category.php?category=<?php echo urlencode("Mice &amp; Trackball");?>">Mice and Trackballs</a></li>
                            <li><a href="category.php?category=<?php echo urlencode("Monitors");?>">Monitors</a></li>
                            <li><a href="category.php?category=<?php echo urlencode("Printers");?>">Printers</a></li>
                            <li><a href="category.php?category=<?php echo urlencode("Scanners");?>">Scanners</a></li>
                            
                        </ul>
                      </li>
                    
                      <li id="phone"><a href="category.php?category=<?php echo urlencode("Phones &amp; PDAs");?>">Phones &amp; PDAs</a></li>
                     <li><a href="category.php?category=<?php echo urlencode("Web Cameras");?>">Web Cameras</a></li>
                      <li id="mp3"><a href="category.php?category=<?php echo urlencode("MP3 Players");?>">MP3 Players</a></li>
                    </ul>
          </div>	  	  
	        
      </div>
    
  
</div>
<!--header end-->
  
  <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="sliderengine/image/22.jpg"  /></li>
            <li><img src="sliderengine/image/l2.jpg"  /></li>
            <li><img src="sliderengine/image/20.jpg"  /></li>
            <li><img src="sliderengine/image/16.jpg"  /></li>
            <li><img src="sliderengine/image/110.jpg" /></li>
            <li><img src="sliderengine/image/25.jpg"  /></li>
            <li><img src="sliderengine/image/26.jpg"  /></li>
            <li><img src="sliderengine/image/27.jpg"  /></li>
            <li><img src="sliderengine/image/28.jpg"  /></li>
            <li><img src="sliderengine/image/29.jpg"  /></li>
            <li><img src="isliderengine/mage/16.jpg"  /></li>

            
        </ul>
       
       
    </div>

