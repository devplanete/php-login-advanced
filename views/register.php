<div class="col-md-4 col-md-offset-4">
  <form method="post" action="?register">
	<fieldset>
	  <legend><?php echo WORDING_REGISTER; ?></legend>
	  <div class="form-group">
		<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
		<input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" value="<?php echo (isset($_POST['user_name']) ? $_POST['user_name'] : ''); ?>" required autofocus/>
	  </div>
	  <div class="form-group">
		<label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
		<input id="user_email" class="form-control" type="email" name="user_email" value="<?php echo (isset($_POST['user_email']) ? $_POST['user_email'] : ''); ?>" required />
	  </div>
	  <div class="form-group">
		<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
		<input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
	  </div>
	  <div class="form-group">
		<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
		<input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
	  </div>
	  <div class="form-group">
		<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY;?>"></div>
	  </div>
	  <div class="form-group">
		<input type="submit" name="register" class="btn btn-default" value="<?php echo WORDING_REGISTER; ?>" />
	  </div>
	</fieldset>
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
