<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>

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
    $date = date('Y-m-s H:i:s');

	$conn = mysqli_connect("www.jonsobier.com", "jsobieze_dragoadmin", "3073707", "jsobieze_dragocraft") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblapply (fName, lName, mcUname, disUname, age, email, timezone, joinMonth, applymessage, dateapplied) VALUES ('" . $fName. "', '" . $lName. "', '" . $mcUname. "','" . $disUname. "','" . $age. "','" . $email. "','" . $timezone. "','" . $joinMonth. "','" . $applymessage. "','" . $date. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your application to be a DragoCraft Staff member has been received and saved for review in the near future by our leadership. If you fit what we need and require, you will hear back very soon from our leadership!";
	   $type = "success";
	//}
}

require_once "apply.php";
?>

<body style="background-image: url('img/bg8.png'); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed;">

    <div class="container">
        <div class="container" style="margin-top: 10%;width: 95%;">
            <div class="pagetop">
                <h1>Apply to Be On Our Staff</h1>
            </div>
        </div>
        <div class="form-container">
            <form name="frmApply" id="frmApply" method="POST" action="mail/send_apply_mail.php" enctype="multipart/form-data" onSubmit="return validateApplicationForm()">


                <div class="input-row">
                    <label style="padding-top: 20px;">First Name</label>
                    <span id="fName-info" class="info"></span><br />
                    <input type="text" class="input-field" name="fName" id="fName" />
                </div>

                <div class="input-row">
                    <label style="padding-top: 20px;">Last Name</label>
                    <span id="lName-info" class="info"></span><br />
                    <input type="text" class="input-field" name="lName" id="lName" />
                </div>

                <div class="input-row">
                    <label style="padding-top: 20px;">Your Minecraft Username</label>
                    <span id="mcUname-info" class="info"></span><br />
                    <input type="text" class="input-field" name="mcUname" id="mcUname" />
                </div>
                
                <div class="input-row">
                    <label style="padding-top: 20px;">Your Discord Username</label>
                    <span id="disUname-info" class="info"></span><br />
                    <input type="text" class="input-field" name="disUname" id="disUname" />
                </div>
                <div class="input-row">
                    <label>Age</label> <span id="age-info" class="info"></span><br /> 
                    <input type="number" class="input-field" name="age" id="age" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="email-info" class="info"></span><br />
                    <input type="email" class="input-field" name="email" id="email" />
                </div>
                                <div class="input-row">
                    <label style="padding-top: 20px;">Timezone You Live In</label>
                    <span id="timezone-info" class="info"></span><br />
                    <input type="text" class="input-field" name="timezone" id="timezone" />
                </div>
                
                <div class="input-row">
                    <label style="padding-top: 20px;">Month You Joined The Server</label>
                    <span id="joinMonth-info" class="info"></span><br />
                    <input type="text" class="input-field" name="joinMonth" id="joinMonth" />
                </div>
                                    <div class="input-row">
                        <label>In 300 Words Or Less, Why Are You The Perfect Choice to Be On DragoCraft Staff:</label> <span id="applymessage-info" class="info"></span><br />
                        <textarea name="applymessage" id="applymessage" class="input-field" cols="60" rows="6"></textarea>
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
            <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                function validateApplicationForm() {
                    var valid = true;

                    $(".info").html("");
                    $(".input-field").css('border', '#8b0000 1px solid');
                    var fName = $("#fName").val();
                    var lName = $("#lName").val();
                    var mcUname = $("#mcUname").val();
                    var disUname = $("#disUname").val();
                    var age = $("#age").val();
                    var email = $("#email").val();
                    var timezone = $("#timezone").val();
                    var joinMonth = $("#joinMonth").val();
                    var applymessage = $("#applymessage").val();

                    if (fName == "") {
                        $("#fName-info").html("Required.");
                        $("#fName").css('border', '#8b0000 1px solid');
                        valid = false;
                    }

                    if (lName == "") {
                        $("#lName-info").html("Required.");
                        $("#lName").css('border', '#8b0000 1px solid');
                        valid = false;
                    }

                    if (mcUname == "") {
                        $("#mcUname-info").html("Required.");
                        $("#mcUname").css('border', '#8b0000 1px solid');
                        valid = false;
                    }

                    if (disUname == "") {
                        $("#disUname-info").html("Required.");
                        $("#disUname").css('border', '#8b0000 1px solid');
                        valid = false;
                    }
                    
                    if (age == "") {
                        $("#age-info").html("Required.");
                        $("#age").css('border', '#8b0000 1px solid');
                        valid = false;
                    }
                    
                    if (email == "") {
                        $("#email-info").html("Required.");
                        $("#email").css('border', '#8b0000 1px solid');
                        valid = false;
                    }
                    if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
                    {
                        $("#email-info").html("Invalid Email Address.");
                        $("#email").css('border', '#8b0000 1px solid');
                        valid = false;
                    }
                    if (timezone == "") {
                        $("#timezone-info").html("Required.");
                        $("#timezone").css('border', '#8b0000 1px solid');
                        valid = false;
                    }

                    if (joinMonth == "") {
                        $("#joinMonth-info").html("Required.");
                        $("#joinMonth").css('border', '#8b0000 1px solid');
                        valid = false;
                    }
                    
                    if (applymessage == "") {
                        $("#applymessage-info").html("Required.");
                        $("#applymessage").css('border', '#8b0000 1px solid');
                        valid = false;
                    }

                    return valid;
                }

            </script>
           
        </div>
    </div>
         <?php include('includes/footer.php'); ?>
</body>

</html>
