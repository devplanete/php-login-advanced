<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php-login-advanced</title>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="container">
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    foreach ($login->errors as $error) {
        echo "<p class='alert alert-danger'>$error</p>\n";
    }

    foreach ($login->messages as $message) {
        echo "<p class='alert alert-info'>$message</p>\n";
    }
    echo '<pre>';
    print_r($login);
    exit();
}
?>
