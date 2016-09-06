<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>php-login-advanced</title>
	<style type="text/css">
	/* just for the demo */
	body {
		font-family: Arial, sans-serif;
		font-size: 12px;
		margin: 10px;
		text-align: center;
	}
	a, a:link, a:visited, a:active {
		text-decoration: none;
		color: #00C;
	}
	a:hover {
		text-decoration: underline;
		color: #00C;
	}
	fieldset {
		display: inline-block;
		text-align: left;
		border: 1px solid #6fa3c4;
		margin: 0 auto;
		padding: 15px;
		border-radius: 6px;
		margin-bottom: 15px;
	}
	legend {
		font-size: 1.2em;
		font-weight: bold;
	}
	label {
		display: block;
		vertical-align: middle;
		bottom: 1px;
	}
	input[type=text], input[type=password], input[type=submit], input[type=email] {
		margin-bottom: 15px;
		padding: 4px;
		font-size: 13px;
		line-height: 16px;
		width: 240px;
		border: 1px solid #ccc;
		border-radius: 3px;
	}
	input[type=submit] {
		display: block;
		width: 250px;
		background-color: #4c8ffc;
		border: 1px solid #2f5bb7;
		color: #fff;
		cursor: pointer;
		margin-bottom: 0px;
	}
	input[type=checkbox] {
		margin-bottom: 15px;
	}
	.login_error {
		background: #EAD3D6 url(views/error.png) no-repeat center left;
		border: 1px solid #f36971;
		padding: 5px 8px 5px 24px;
		display: inline-block;
		*display: inline; /* display:inline-block is not supported by IE7 */
		border-radius: 3px;
		margin-bottom: 7px;
	}
	.login_message {
		background: #dff0d8 url(views/info.png) no-repeat center left;
		border: 1px solid #d0e5ca;
		color: #468847;
		padding: 5px 8px 5px 24px;
		display: inline-block;
		*display: inline; /* display:inline-block is not supported by IE7 */
		border-radius: 3px;		
		margin-bottom: 7px;
	}
	</style>
</head>
<body>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    foreach ($login->errors as $error) {
        echo "<span class=\"login_error\">$error</span><br/>\n";
    }

    foreach ($login->messages as $message) {
        echo "<span class=\"login_message\">$message</span><br/>\n";
    }
}
?>
