<?php
if(!empty($_POST["send"])) {
	$reportingUname = $_POST["reportedName"];
	$reportedUname = $_POST["reportingName"];
	$rules = $_POST["brokenRules"];
	$message = $_POST["message"];

	$toEmail = "js_web_development@outlook.com";
	$mailHeaders = "From: " . $reportedUname . "<". $reportingUname .">\r\n";
	if(mail($toEmail, $rules, $message, $mailHeaders)) {
	    $message = "Your report has been received successfully. Thank you for keeping our server appropriate and safe for all.";
	    $type = "success";
	}
}
require_once "../report.php";
?>