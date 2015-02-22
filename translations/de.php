<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Dein Account ist noch nicht aktiviert. Bitte klicke auf den Bestätigungslink in der E-Mail.");
define("MESSAGE_CAPTCHA_WRONG", "Captcha ist falsch!");
define("MESSAGE_COOKIE_INVALID", "Ungültiger Cookie");
define("MESSAGE_DATABASE_ERROR", "Problem mit der Datenbankverbindung.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Diese E-Mail Adresse ist bereits registriert. Bitte geh auf die \"Ich habe mein Passwort vergessen\" Seite wenn du dein Passwort vergessen hast.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Entschuligung, die Änderung deiner E-Mail Adresse ist fehlgeschlagen.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Deine E-Mail Adresse wurde erfolgreich geändert. Die neue Adresse ist: ");
define("MESSAGE_EMAIL_EMPTY", "E-Mail darf nicht leer sein");
define("MESSAGE_EMAIL_INVALID", "Deine E-Mail Adresse ist in keinem gültigen Format");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Entschuldigung, diese E-Mail Adresse ist dieselbe wie deine jetzige. Bitte wähle eine andere.");
define("MESSAGE_EMAIL_TOO_LONG", "E-Mail darf nicht länger als 254 Zeichen sein");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Parameter im Link enthält keine Daten.");
define("MESSAGE_LOGGED_OUT", "Du wurdest ausgeloggt.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Login fehlgeschlagen.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Dein altes Passwort war falsch.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Passwort und Passwort bestätigen stimmen nicht überein");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Entschuldigung, die Passwortänderung ist fehlgeschlagen.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Passwort erfolgreich geändert!");
define("MESSAGE_PASSWORD_EMPTY", "Passwort-Feld war leer");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "E-Mail zum Zurücksetzen des Passworts wurde NICHT erfolgreich versendet! Fehler: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "E-Mail zum Zurücksetzen des Passworts wurde erfolgreich versendet!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Das Passwort hat eine Mindestlänge von 6 Zeichen");
define("MESSAGE_PASSWORD_WRONG", "Falsches Passwort. Bitte versuche es erneut.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Du hast dein Passwort bereits dreimal oder öfter falsch eingegeben. Bitte warte 30 Sekunden und versuche es dann erneut.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Entschuldigung, hier keine solche ID/Verifizierungscode-Kombination...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Aktivierung war erfolgreich! Du kannst dich nun einloggen!");
define("MESSAGE_REGISTRATION_FAILED", "Entschuldigung, die Registrierung ist fehlgeschlagen. Bitte gehe zurück und versuch es erneut.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Dein Zurücksetzunglink ist abgelaufen. Bitte benutze den Link innerhalb einer Stunde.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Entschuldigung, wir konnten deine Verifizierungsmail nicht senden. Dein Account wurde NICHT erstellt.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Verifizierungsmail NICHT erfolgreich versendet! Fehler: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Dein Account wurde erfolgreich erstellt und wir haben dir eine E-Mail gesendet. Bitte klicke auf den Verifizierungslink in dieser Mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Dieser Nutzer existiert nicht");
define("MESSAGE_USERNAME_BAD_LENGTH", "Benutzername darf nicht kürzer als 2 oder länger als 64 Zeichen sein");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Entschuldigung, deine gewählte Umbenennung des Benutzernamens ist fehlgeschlagen");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Dein Benutzername wurde erfolgreich geändert. Der neue Name lautet ");
define("MESSAGE_USERNAME_EMPTY", "Das Feld für den Benutzernamen war leer");
define("MESSAGE_USERNAME_EXISTS", "Entschuldigung, der Benutzername wird bereits verwendet. Bitte wähle einen anderen.");
define("MESSAGE_USERNAME_INVALID", "Benutzername passt nicht ins Namensschema: nur a-Z und Zahlen sind erlaubt, mit einer Länge von 2 bis 64 Zeichen");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Entschuldigung, dein Benutzername ist gleich wie dein jetziger. Bitte wähle einen anderen.");

// views
define("WORDING_BACK_TO_LOGIN", "Zurück zur Anmeldeseite");
define("WORDING_CHANGE_EMAIL", "E-Mail ändern");
define("WORDING_CHANGE_PASSWORD", "Paswort ändern");
define("WORDING_CHANGE_USERNAME", "Benutzername ändern");
define("WORDING_CURRENTLY", "momentan");
define("WORDING_EDIT_USER_DATA", "Nutzerdaten ändern");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Du bist nun eingeloggt und kannst deine Anmeldedaten hier ändern");
define("WORDING_FORGOT_MY_PASSWORD", "Ich habe mein Passwort vergessen");
define("WORDING_LOGIN", "Einloggen");
define("WORDING_LOGOUT", "Ausloggen");
define("WORDING_NEW_EMAIL", "Neue E-Mail");
define("WORDING_NEW_PASSWORD", "Neues Passswort");
define("WORDING_NEW_PASSWORD_REPEAT", "Neues Passwort bestätigen");
define("WORDING_NEW_USERNAME", "Neuer Benutzername (Benutzername darf nicht leer sein, muss a-z,A-Z,0-9 und 2-64 Zeichen lang sein)");
define("WORDING_OLD_PASSWORD", "Dein altes Passwort");
define("WORDING_PASSWORD", "Passwort");
define("WORDING_PROFILE_PICTURE", "Dein Profilbild (von Gravatar):");
define("WORDING_REGISTER", "Registrieren");
define("WORDING_REGISTER_NEW_ACCOUNT", "Neuen Account registrieren");
define("WORDING_REGISTRATION_CAPTCHA", "Bitte gib diese Zeichen ein");
define("WORDING_REGISTRATION_EMAIL", "E-Mail des Benutzers (bitte gib eine echte E-Mail Adresse an, du erhältst eine Verifizierungsmail mit einem Aktivierungslink)");
define("WORDING_REGISTRATION_PASSWORD", "Passwort (mind. 6 Zeichen!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Password bestätigen");
define("WORDING_REGISTRATION_USERNAME", "Benutzername (nur Buchstaben und Zahlen, 2 bis 64 Zeichen)");
define("WORDING_REMEMBER_ME", "Angemeldet bleiben");
define("WORDING_REQUEST_PASSWORD_RESET", "Passwort Zurücksetzung anfordern.<br/>Gib deinen Benutzernamen oder deine E-Mail Adresse ein und dir wird eine Mail mit weiteren Anweisungen zugesendet:");
define("WORDING_RESET_PASSWORD", "Passwort zurücksetzen");
define("WORDING_SUBMIT_NEW_PASSWORD", "Neues Passwort zusenden");
define("WORDING_USERNAME", "Benutzername");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Du bist eingeloggt als ");
