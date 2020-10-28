<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>

<?php
if(!empty($_POST["send"])) {
    $reportingUname = $_POST["reportingName"];
	$reportedUname = $_POST["reportedName"];
    $rulesBroken = $_POST["rulesBroken"];
	$message = $_POST["message"];
    $date = date('Y-m-s H:i:s');

	$conn = mysqli_connect("www.jonsobier.com", "jsobieze_dragoadmin", "3073707", "jsobieze_dragocraft") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblreport (reportingName, reportedName, rulesBroken, message, datereported) VALUES ('" . $reportingUname. "', '" . $reportedUname. "', '" . $rulesBroken. "','" . $message. "','" . $date. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your information regarding potential inappropriate behavior on the server by another user has been saved successfully.";
	   $type = "success";
	//}
}

require_once "report.php";
?>

<body style="background-image: url('img/bg10.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;">

    <div class="container" style="margin-top: 10%;">
        <div class="pagetop">
            <h1>Report a Player</h1>
        </div>
    </div>
   <div class="form-container">
                <form name="frmReport" id="frmReport" method="POST" action="mail/send_report_email.php"  enctype="multipart/form-data" onSubmit="return validateReportForm()">


                                        <div class="input-row">
                        <label style="padding-top: 20px;">Minecraft Username Being Reported</label>
                        <span id="reportedName-info" class="info"></span><br />
                        <input type="text" class="input-field" name="reportedName" id="reportedName" />
                    </div>
                    
                                        <div class="input-row">
                        <label style="padding-top: 20px;">Your Minecraft Username</label>
                        <span id="reportingName-info" class="info"></span><br />
                        <input type="text" class="input-field" name="reportingName" id="reportingName" />
                    </div>
                    <div class="input-row">
                        <label>Rule(s) Broken</label> <span id="rulesBroken-info" class="info"></span><br /> <input type="text" class="input-field" name="rulesBroken" id="rulesBroken" />
                    </div>
                    <div class="input-row">
                        <label>In as few words as possible, describe what you witnessed the other player do to deserve to be banned:</label> <span id="message-info" class="info"></span><br />
                        <textarea name="message" id="message" class="input-field" cols="60" rows="6"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="send" class="btn-submit" value="Send" />

                        <div id="statusMessage">
                            <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </form>
                     <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateReportForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#8b0000 1px solid');
	        var reportingUname = $("#reportingName").val();
            var reportedUname = $("#reportedName").val();
            var rulesBroken = $("#rulesBroken").val();
            var message = $("#message").val();

            if (reportedUname == "") {
                $("#reportingName-info").html("Required.");
                $("#reportingName").css('border', '#8b0000 1px solid');
                valid = false;
            }
                
            if (reportingUname == "") {
                $("#reportedName-info").html("Required.");
                $("#reportedName").css('border', '#8b0000 1px solid');
                valid = false;
            }
            
            if (rules == "") {
                $("#rulesBroken-info").html("Required.");
                $("#rulesBroken").css('border', '#8b0000 1px solid');
                valid = false;
            }
        
            if (message == "") {
                $("#message-info").html("Required.");
                $("#message").css('border', '#8b0000 1px solid');
                valid = false;
            }
        
            return valid;
        }
</script>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>
