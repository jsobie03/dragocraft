<?php include('includes/header.php');
      include('includes/nav.php'); 
?>

<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$reason = $_POST["banReason"];
	$appeal = $_POST["userAppeal"];

	$conn = mysqli_connect("www.jonsobier.com", "jsobieze_dragoadmin", "3073707", "jsobieze_dragocraft") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblappeal (user_name, user_email,reason,appeal) VALUES ('" . $name. "', '" . $email. "','" . $reason. "','" . $appeal. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your appeal information has been saved successfully.";
	   $type = "success";
	//}
}
require_once "appeal.php";
?>

<body style="background-image: url('img/bg11.png'); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed;">
        <div class="container" style="margin-top: 10%;">
            <div class="pagetop">
                <h1>Appeal Your Ban</h1>
            </div>
        </div>


        <div class="form-container">
                <form name="frmAppeal" id="frmAppeal" method="POST" action="mail/send_appeal_mail.php"  enctype="multipart/form-data" onSubmit="return validateAppealForm()">

                    <div class="input-row">
                        <label style="padding-top: 20px;">Minecraft Username</label>
                        <span id="userName-info" class="info"></span><br />
                        <input type="text" class="input-field" name="userName" id="userName" />
                    </div>
                    <div class="input-row">
                        <label>Email/Reply-To</label> <span id="userEmail-info" class="info"></span><br /> <input type="email" class="input-field" name="userEmail" id="userEmail" />
                    </div>
                    <div class="input-row">
                        <label>Reason For Ban</label> <span id="banReason-info" class="info"></span><br /> <input type="text" class="input-field" name="banReason" id="banReason" />
                    </div>
                    <div class="input-row">
                        <label>In as few words as possible, state the appeal to your ban:</label> <span id="userAppeal-info" class="info"></span><br />
                        <textarea name="userAppeal" id="userAppeal" class="input-field" cols="60" rows="6"></textarea>
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
        function validateAppealForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#8b0000 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#banReason").val();
            var content = $("#userAppeal").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#8b0000 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#8b0000 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#8b0000 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#banReason-info").html("Required.");
                $("#banReason").css('border', '#8b0000 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userAppeal-info").html("Required.");
                $("#userAppeal").css('border', '#8b0000 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>
