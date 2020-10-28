<?php
if(!empty($_POST["send"])) {
	$fName = $_POST["fName"];
    $lName = $_POST["lName"];
	$mcUname = $_POST["mcUname"];
    $disUname = $_POST["disUname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $timezone = $_POST["timezone"];
    $joinMonth = $_POST["joinMonth"];
    $applymessage = $_POST["applymessage"];
    
	$toEmail = "js_web_development@outlook.com";
	$mailHeaders = "From: " . $lName .", ". $fName . "<". $mcUname .">" . "<" . $disUname .">"" \r\n";
	if(mail($toEmail, $age, $email, $timezone, $joinMonth, $applymessage, $mailHeaders)) {
	    $message = "Your application has been received and saved successfully. If you meet the criteria to become a member of DragoCraft's staff, you will then be contacted for an online interview";
	    $type = "success";
	}
}
require_once "../apply.php";
?>