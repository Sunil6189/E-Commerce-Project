<?php


  session_start();
  session_unset();
  session_destroy();

?>
<script type="text/javascript">
alert('You have been logout successfully' );
window.location='index.php';
</script>