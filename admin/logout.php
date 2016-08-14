

            
          
<?php
session_start();
$_SESSION['adminname']=null;
session_destroy();
$_SESSION=array();
?>
<script>

window.location="index.php";
</script>

            
        


