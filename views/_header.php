<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php-login-advanced</title>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
</head>
<body>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    foreach ($login->errors as $error) {
        echo "<p class='alert alert-danger'>$error</p>\n";
    }

    foreach ($login->messages as $message) {
        echo "<p class='alert alert-info'>$message</p>\n";
    }
}
?>
