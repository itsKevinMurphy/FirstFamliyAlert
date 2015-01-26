<?php
ob_start();
$from = $_POST['from'];
$to = $_POST['to'];
$carrier = $_POST['carrier'];
$message = stripslashes($_POST['message']);

if ((empty($from)) || (empty($to)) || (empty($message))) {
echo "<script type='text/javascript'>alert('failed!')</script>";

//header("Location: http://www.firstfamilyalert.com/launch.html");
}

else {
$formatted_number = $to."@msg.telus.com";
mail("$formatted_number", "SMS", "$message","$from"); 

$formatted_number = $to."@sms.rogers.com";
mail("$formatted_number", "SMS", "$message","$from");

$formatted_number = $to."@txt.bell.ca";
mail("$formatted_number", "SMS", "$message","$from");

$formatted_number = $to."@txt.bellmobility.ca";
mail("$formatted_number", "SMS", "$message","$from");

$formatted_number = $to."@txt.windmobile.ca";
mail("$formatted_number", "SMS", "$message","$from");

$formatted_number = $to."@vmobile.ca";
mail("$formatted_number", "SMS", "$message","$from");


header("Location: http://www.firstfamilyalert.com/launch.html");
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
?>