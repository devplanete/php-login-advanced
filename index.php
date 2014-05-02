<?php
/**
 * A simple PHP Login Script / ADVANCED VERSION
 *
 * @link https://github.com/devplanete/php-login-advanced
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load php-login components
require_once("php-login.php");
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();

include('views/_header.php');

// show the registration form
if (isset($_GET['register']) && ! $login->isRegistrationSuccessful() && 
   (ALLOW_USER_REGISTRATION || (ALLOW_ADMIN_TO_REGISTER_NEW_USER && $_SESSION['user_access_level'] == 255))) {
    include('views/register.php');

// show the request-a-password-reset or type-your-new-password form
} else if (isset($_GET['password_reset']) && ! $login->isPasswordResetSuccessful()) {
    if (isset($_REQUEST['user_name']) && isset($_REQUEST['verification_code']) && $login->isPasswordResetLinkValid()) {
        // reset link is correct: ask for the new password
        include("views/password_reset.php");
    } else {
        // no data from a password-reset-mail has been provided, 
        // we show the request-a-password-reset form
        include('views/password_reset_request.php');
    }

// show the edit form to modify username, email or password
} else if (isset($_GET['edit']) && $login->isUserLoggedIn()) {
    include('views/edit.php');

// the user is logged in, we show informations about the current user
} else if ($login->isUserLoggedIn()) {
    include('views/logged_in.php');

// the user is not logged in, we show the login form
} else {
    include('views/login.php');
}

include('views/_footer.php');
