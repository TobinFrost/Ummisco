<!DOCTYPE html>
<?php
session_start();
include('../testCaptcha/simple-php-captcha.php');
$_SESSION['captcha'] = simple_php_captcha();

?>
<html>

<head>

    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscription DEMAT</title>

    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <style type="text/css">
            body {
        padding-top: 100px;
        background-color: #f8f8f8;
    }
    
    .text-error {
  	color: #b94a48;
	}
	.text-info {
  	color: #3a87ad;
	}
	
	.text-success {
 	 color: #468847;
	}
    @media(min-width:768px) {
        body {
            padding-top: 5px;
        }
    }
    .login-panel {
    margin-top: 5%;
    }

    </style>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<?php include '../vue/inscription_form_vue.php'; ?>


</html>
