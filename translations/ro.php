<?php
/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */
// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Contul tău nu este activat. Dă click pe link-ul de confirmare transmis pe email.");
define("MESSAGE_CAPTCHA_WRONG", "Codul Captcha este incorect!");
define("MESSAGE_COOKIE_INVALID", "Cookie invalid");
define("MESSAGE_DATABASE_ERROR", "Probleme cu conexiuanea la baza de date.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Această adresă de email este deja folosită. Accesează pagina \"Mi-am uitat parola\" dacă ai uitat datele de logare.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Schimbarea adresei de email a eşuat.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Adresa ta de email a fost schimbată cu succes. Noua adresă este ");
define("MESSAGE_EMAIL_EMPTY", "Adresa de email trebuie completată");
define("MESSAGE_EMAIL_INVALID", "Adresa de email nu este validă");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Această adresă de email este identică cu utilizată. Alege alta.");
define("MESSAGE_EMAIL_TOO_LONG", "Adresa de email nu poate fi mai lungă de 254 caractere");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Link fără parametri.");
define("MESSAGE_LOGGED_OUT", "Te-ai deconectat.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Logare eşuată.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Parola ta veche este greşită.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Parola şi parola repetată nu coincid");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Sorry, parola nu putut fi schimbată.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Password successfully changed!");
define("MESSAGE_PASSWORD_EMPTY", "Câmpul Parola nu a fost completat");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Email-ul de resetare a parolei nu s-a putut transmite! Eroare: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Email-ul de resetare a parolei a fost transmis cu succes!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Parola trebuie să aibă minimum 6 caractere");
define("MESSAGE_PASSWORD_WRONG", "Parolă incorectă. Mai încearcă.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Ai introdus o parolă incorectă de mai mult de 3 ori. Aşteaptă 30 secunde înainte de a reîncerca.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Sorry, no such id/verification code combination here...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Contul tău a fost activat cu succes! Acum te poţi loga!");
define("MESSAGE_REGISTRATION_FAILED", "Sorry, your registration failed. Please go back and try again.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Your reset link has expired. Please use the reset link within one hour.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Sorry, we could not send you an verification mail. Your account has NOT been created.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Verification Mail NOT successfully sent! Error: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "This user does not exist");
define("MESSAGE_USERNAME_BAD_LENGTH", "Username cannot be shorter than 2 or longer than 64 characters");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Sorry, your chosen username renaming failed");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Your username has been changed successfully. New username is ");
define("MESSAGE_USERNAME_EMPTY", "Username field was empty");
define("MESSAGE_USERNAME_EXISTS", "Sorry, that username is already taken. Please choose another one.");
define("MESSAGE_USERNAME_INVALID", "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Sorry, that username is the same as your current one. Please choose another one.");
// views
define("WORDING_BACK_TO_LOGIN", "Înapoi la pagina de logare");
define("WORDING_CHANGE_EMAIL", "Schimbă adresa de email");
define("WORDING_CHANGE_PASSWORD", "Schimbă parola");
define("WORDING_CHANGE_USERNAME", "Schimbă utilizator");
define("WORDING_CURRENTLY", "în mod curent");
define("WORDING_EDIT_USER_DATA", "Editare date utilizator");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Eşti logat şi îţi poţi edita credenţialele aici");
define("WORDING_FORGOT_MY_PASSWORD", "Mi-am uitat parola");
define("WORDING_LOGIN", "Logare");
define("WORDING_LOGOUT", "Deconectare");
define("WORDING_NEW_EMAIL", "Email nou");
define("WORDING_NEW_PASSWORD", "Parola nouă");
define("WORDING_NEW_PASSWORD_REPEAT", "Repeat new password");
define("WORDING_NEW_USERNAME", "New username (username cannot be empty and must be azAZ09 and 2-64 characters)");
define("WORDING_OLD_PASSWORD", "Parola veche");
define("WORDING_PASSWORD", "Parolă");
define("WORDING_PROFILE_PICTURE", "Poza ta de profil(din gravatar):");
define("WORDING_REGISTER", "Înregistrează");
define("WORDING_REGISTER_NEW_ACCOUNT", "Creează un cont nou");
define("WORDING_REGISTRATION_CAPTCHA", "Introdu aceste caractere");
define("WORDING_REGISTRATION_EMAIL", "Email utilizator (adresă de email reală, vei primi un email de verificare şi un link de activare)");
define("WORDING_REGISTRATION_PASSWORD", "Parolă (minim 6 caractere!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Repetare parolă");
define("WORDING_REGISTRATION_USERNAME", "Utilizator (doar litere şi cifre, între 2 şi 64 caractere)");
define("WORDING_REMEMBER_ME", "Menţine-mă logat(ă)");
define("WORDING_REQUEST_PASSWORD_RESET", "Request a password reset.<br/>Enter your username or email, and you'll get a mail with instructions:");
define("WORDING_RESET_PASSWORD", "Resetează parola");
define("WORDING_SUBMIT_NEW_PASSWORD", "Trasmite noua parolă");
define("WORDING_USERNAME", "Utilizator");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Eşti logat ca  ");
