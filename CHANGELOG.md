# CHANGE LOG

**August 21th 2016**
- add Romanian translation files

**August 8th 2015**
- add Italian translation files

**May 3rd 2015**
- add German and Persian translation files

**February 20th 2015**
- email address can now be used in the lost password feature (like username)
- add html5 input attributes inside forms (required, autofocus, autocomplete)
- bug fix: check database connection in registereNewUser()
- update PHPMailer and SMTP libraries from version 5.2.8 to 5.2.9

**May 25th 2014**
- update PHPMailer and SMTP libraries from version 5.2.7 to 5.2.8
- add Russian translation file

**May 11th 2014**
- class in now called `PHPLogin` in replacement of only `Login`
- constructor automatically loads config, librairies and language files

**May 1st 2014**
- new beautiful style
- new field user_access_level in user table to manage user access right
- new registration options to disable user registration and allow administrators to register users

**April 26th 2014**
- create unique php file entry point

**April 23th 2014**
- cleaning and simplification of code

**April 22th 2014**
- merge Registration class into Login class

**April 20th 2014**
- update PHPMailer.php from version 5.2.6 to 5.2.7
- add SPL autoloader function to load classes only when needed

**April 19th 2014**
- "remember me" supports parallel login from multiple devices
- simplify gravatar integration to a simple function

**April 15th 2014**
- add multilanguage support (detection of browser language)
- add french translation file
- increase email max size up to 254 characters long

**April 13th 2014**
- first updated version based on the last php-login-advanced version from panique
- add a common include file: php-login.php
