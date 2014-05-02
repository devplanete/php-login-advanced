
<fieldset>
	<legend><?php echo WORDING_EDIT_USER_DATA; ?></legend>
	<h2><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h2>

	<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
	<form method="post" action="?edit">
		<label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
		<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)
		<input type="submit" name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
	</form><hr/>

	<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
	<form method="post" action="?edit">
		<label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
		<input id="user_email" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)
		<input type="submit" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
	</form><hr/>

	<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
	<form method="post" action="?edit">
		<label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
		<input id="user_password_old" type="password" name="user_password_old" pattern=".{6,}" required autocomplete="off" />

		<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
		<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

		<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
		<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

		<input type="submit" name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
	</form>
</fieldset><br/>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
