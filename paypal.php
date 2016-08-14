<?php
 error_reporting(0);
$order_id=$_GET['order_id'];
$gross_total=$_GET['gross_total'];
require_once('paypal.class.php'); // include the class file
$p = new paypal_class; // initiate an instance
$p->paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr"; //test url
//'https://www.paypal.com/cgi-bin/webscr'; // paypal url
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
// if no action variable, set 'process' as default action
if (empty($_GET['action'])) $_GET['action'] = 'process';
switch ($_GET['action']) {
case 'process': // Process and order...
$p->add_field('business', 'sunilbansal61-facilitator@gmail.com');
$p->add_field('return', $this_script.'?action=success');
$p->add_field('cancel_return', $this_script.'?action=cancel');
$p->add_field('notify_url', $this_script.'?action=ipn');
$p->add_field('item_name', $order_id); // 'ITEM NAME'
$p->add_field('amount', $gross_total); // 'ITEM AMOUNT'
$p->add_field('currency_code', 'NZD');//CURRENCY VALUE USD/EUR…
$p->submit_paypal_post(); // submit the fields to paypal
break;
case 'success': // successful order...
echo "<html>
<head><title>Success....</title></head>
<body>
<h2>Thank you for your order!</h2>";
foreach ($_POST as $key => $value) {
echo "$key: $value<br>";
}
echo "</body></html>";
break;
case 'cancel': // Canceled Order...

echo "<html>
<head><title>Canceled</title></head>
<body><h2>The order was canceled.</h2>";
echo "</body></html>";
break;
case 'ipn': // For IPN validation...
if ($p->validate_ipn()) {
$subject = 'Instant Payment Notification - Recieved Payment';
$to = 'info@technsolution.co.nz';
$body="An instant payment notification was successfully recieved\n";
$body .= "from ".$p->ipn_data['sunilbansal61-facilitator.gmail.com']." on ".date('m/d/Y');
$body .= "\n\nDetails:\n";
foreach ($p->ipn_data as $key => $value) {
$body .= "\n$key: $value";
}
@mail($to, $subject, $body);
}
break;
}
?>