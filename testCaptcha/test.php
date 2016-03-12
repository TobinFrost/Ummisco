<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

echo print_r($_SESSION['captcha']);
?>


<img src="<?php echo $_SESSION['captcha']['image_src']; ?>">