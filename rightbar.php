

<html>
<body>
<!-- right column-->
<div id="column_right">
<div id="module_cart" class="box">
  <div class="top">Shopping Cart</div>
  <div>
 
            <a href="shoppingcart.php"><img src="images/cart_logo.jpg" title="Your Cart" alt="Your Cart" /></a>
          </div>
		  <div class="top">Product Search</div>
		
  <div>
 
            <form action="searchProduct.php" method="post" enctype="multipart/form-data">
			<input type="text" name="search"  placeholder="type prdouct name.."/><br/>
			<input type="submit" value="search"/>
			</form>
          </div>
		  </div>
		  
    
<?php include("bestseller.php");?>
  </div>
  </body>
  </html>
<!-- right column end-->