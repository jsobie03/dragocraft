<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$reason = $_POST["banReason"];
	$appeal = $_POST["userAppeal"];

	$toEmail = "js_web_development@outlook.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $reason, $appeal, $mailHeaders)) {
	    $message = "Your appeal has been received successfully. You will hear from us with our final decision about the request to overturn your ban no later than 72 hours from now.";
	    $type = "success";
	}
}
require_once "../appeal.php";
?>