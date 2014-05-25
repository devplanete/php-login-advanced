
<fieldset>
	<legend><?php echo WORDING_FORGOT_MY_PASSWORD; ?></legend>
	<form method="post" action="?password_reset">
		<input type='hidden' name='user_name' value='<?php echo $_REQUEST['user_name']; ?>' />
		<input type='hidden' name='verification_code' value='<?php echo $_REQUEST['verification_code']; ?>' />

		<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
		<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" autofocus/>

		<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
		<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
		<input type="submit" name="submit_new_password" value="<?php echo WORDING_SUBMIT_NEW_PASSWORD; ?>" />
	</form>
</fieldset><br/>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
