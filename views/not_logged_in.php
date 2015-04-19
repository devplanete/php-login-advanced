<div class="col-md-4 col-md-offset-4">
	<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
	  <fieldset>
	    <legend><?php echo WORDING_LOGIN; ?></legend>
	    <div class="form-group">  
	      <label for="user_name"><?php echo WORDING_USERNAME; ?></label>
	      <input id="user_name" type="text" name="user_name" class="form-control" required autofocus/>
	    </div>
	    <div class="form-group">
	      <label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
	      <input id="user_password" type="password" name="user_password" autocomplete="off" class="form-control" required />
	    </div>
	    <div class="form-group">
	      <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
	      <label for="user_rememberme" style=" display:inline;"><?php echo WORDING_REMEMBER_ME; ?></label>
	    </div>
	    <div class="form-group">
	      <input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" class="btn btn-default"/>
	    </div>
	  </fieldset>
	</form>
	<?php echo (ALLOW_USER_REGISTRATION ? '<a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>&nbsp;&nbsp;|&nbsp;&nbsp;' : ''); ?>
	<a href="?password_reset"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
</div>