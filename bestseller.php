
<div class="box bestseller">
  <div class="top">Best Seller</div>
  <div class="top"></div>
  <div class="middle">
           <?php
		      $table="<table cellpadding='2' cellspacing='2px' style='width: 100%;'>";
		 
	   $q="select * from product order by `sold` desc LIMIT 0,7";
			$rset=mysqli_query($link,$q);
			 $i=1; 
       while($row=mysqli_fetch_array($rset))
		 	
		 		   {
			   $table=$table."<tr><td valign='top' style='width:1px'><a href='product_info.php?title=".urlencode($row['product_name'])."'><img src='products/".$row['image']."' width='38' height='38' alt='".$row['product_name']."' /></a></td>
        <td valign='top' style='padding-bottom:10px;'><a href='product_info.php?title=".urlencode($row['product_name'])."'>".$row['product_name']."</a>
                    <br />
                    <span style='font-size: 12px; font-weight:bold; color:#555;'>$".$row['price']."</span>
                   
                    </td>
      </tr>
           
        ";
		   $i++;
		   }
		   $table=$table."</table>";
		   
		   echo $table;
		   ?>
           

      </div>
  <div class="bottom">&nbsp;</div>
</div>
