

 <?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once("includes/db.php");

$product_id = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$q=("SELECT quantity FROM product WHERE product_id = ".$product_id);
									$result=mysqli_query($link,$q);

if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->quantity)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}


header("location:shoppingcart.php");
?>
