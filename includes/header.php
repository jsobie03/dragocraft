<!DOCTYPE html>
<html>

<head>
<?php 

$page = basename($_SERVER['PHP_SELF']); 
$title = 'DragoCraft | ';
$titles = array(
    'index.php' => $title.'Home',
    'blog.php' => $title.'Blog',
    'rules.php' => $title.'Server & Discord Rules',
    'join.php' => $title.'How to Join',
    'appeal.php' => $title.'Appeal A Player Ban',
    'report.php' => $title.'Report A Player',
    'apply.php' => $title.'Apply for Staff',
    'vote.php' => $title.'Vote for Us'
);

if(array_key_exists($page, $titles)){
    echo '<title>' .$titles[$page].'</title>';
}else{
    echo '<title>DragoCraft Server</title>';
}
?>
    <meta charset="utf-8">
    <title>DragoCraft - <?php echo $title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="../img/logo.gif">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom fonts for this template -->


    <style>
        .badge {
            border-radius: 50% 20% / 10% 40%;
            width: auto;
            padding: 20px;
            margin: 0 25% 2% 40%;
            background-color: rgba(139, 0, 0, 0.7);
            color: #ffffff;
        }

        .apply {
            background-image:url(../img/bg8.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .report {
            background-image: url(../img/bg10.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .rules {
            background-image: url(../img/bg7.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .rules ol li {
            padding-left: 150px;
            padding-right: 150px;
            padding-top: 25px;
            padding-bottom: 50px;
            font-size: 20px;
        }

        .vote {
            background-image: url(../img/bg12.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        a {
            color: #ffffff;
        }

    </style>

</head>