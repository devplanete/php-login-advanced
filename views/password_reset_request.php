<div class="col-md-4 col-md-offset-4">
	<form method="post" action="?password_reset">
		<fieldset>
			<h2><?php echo WORDING_FORGOT_MY_PASSWORD; ?></h2>
			<hr/>
			<label for="user_name"><?php echo WORDING_REQUEST_PASSWORD_RESET; ?></label>
			<input id="user_name" type="text" name="user_name" class="form-control" required autofocus/>
			<input type="submit" name="request_password_reset" class="btn btn-default" value="<?php echo WORDING_RESET_PASSWORD; ?>" style="margin-top:10px;" />
		</fieldset>
	</form>
	<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
</div>