<div class="col-md-4 col-md-offset-4">
	<h2><?php echo WORDING_EDIT_USER_DATA; ?></h2>
	<hr />
	<p><?php echo WORDING_YOU_ARE_LOGGED_IN_AS . '<b>' . $_SESSION['user_name']; ?></b></p><hr/>

	<p>$_SESSION['user_id'] = <?php echo $_SESSION['user_id']; ?></p>
	<p>$_SESSION['user_name'] = <?php echo $_SESSION['user_name']; ?></p>
	<p>$_SESSION['user_email'] = <?php echo $_SESSION['user_email']; ?></p>
	<p>$_SESSION['user_access_level'] = <?php echo $_SESSION['user_access_level']; ?></p>
	<p>$_SESSION['user_logged_in'] = <?php echo $_SESSION['user_logged_in']; ?></p><hr/>

	<p><?php echo WORDING_PROFILE_PICTURE . '<br/><img src="'; if(isset($login) && is_object($login))echo $login->getGravatarImageUrl(); else echo 'http://www.gravatar.com/avatar/' . md5(strtolower(trim($_SESSION['user_email']))) . "?s=80"; ?>" /></p>

<a href="?logout"><?php echo WORDING_LOGOUT; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?edit"><?php echo WORDING_EDIT_USER_DATA; ?></a>
<?php echo (ALLOW_ADMIN_TO_REGISTER_NEW_USER && $_SESSION['user_access_level'] == 255 ? '<br/><a href="?register">'. WORDING_REGISTER_NEW_ACCOUNT .'</a>' : ''); ?>
</div>