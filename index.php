<?php
/**
 * A simple PHP Login Script / ADVANCED VERSION
 *
 * @link https://github.com/devplanete/php-login-advanced
 * @license http://opensource.org/licenses/MIT MIT License
 */
  $dir = dirname( __FILE__ );
 
// Load application config (error reporting, database credentials etc.)
require $dir . '/config/config.php';
// The auto-loader to load the php-login related internal stuff automatically
require $dir .'/config/autoload.php';
// The Composer auto-loader (official way to load Composer contents) to load external stuff automatically
// the login object will do all login/logout stuff automatically
// so this single line handles the entire login process.