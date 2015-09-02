<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Il tuo account non è stato attivato. Clicca sul link di conferma nella email per attivarlo.");
define("MESSAGE_CAPTCHA_WRONG", "Captcha errato!");
define("MESSAGE_COOKIE_INVALID", "Cookie non valido");
define("MESSAGE_DATABASE_ERROR", "Problema di connessione al database.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Questo indirizzo email è già registrato. Utilizza la funzione \"Ho dimenticato la password\" se non te la ricordi.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Spiacente, variazione di email non riuscito.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "La tua email è stata cambiata. La nuova email é ");
define("MESSAGE_EMAIL_EMPTY", "Email non può essere omessa");
define("MESSAGE_EMAIL_INVALID", "L'indirizzo email non è in un formato valido");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Spiacente, l'email indicata è la stessa attuale. Indicane una differente.");
define("MESSAGE_EMAIL_TOO_LONG", "Email non possono essere più lunghe di 254 caratteri");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Link parametri vuoto.");
define("MESSAGE_LOGGED_OUT", "Sei stato disconnesso.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Login fallito.");
define("MESSAGE_OLD_PASSWORD_WRONG", "La tua vecchia password è errata.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Password e 'ripeti password' non sono uguali.");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Spiacente, variazione di password fallita.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Variazione di password riuscita!");
define("MESSAGE_PASSWORD_EMPTY", "Password omessa");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Invio mail di reset della password NON riuscito! Errore: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Invio mail di reset della password riuscito!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Password deve essere lunga almeno 6 caratteri");
define("MESSAGE_PASSWORD_WRONG", "Password errata. Riprova.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Hai inserito una password errata per 3 o più volte. Prego, attendi 30 secondi per riprovare.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Spiacente, qui non risulta questa combinazione id/verifica ...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Attivazione riuscita! Ora puoi fare login (accedere)!");
define("MESSAGE_REGISTRATION_FAILED", "Spiacente, la tua registrazione è fallita. Prego, ritenta ricominciando da capo.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Il tuo link di reset è scaduto. Prego, usa il link di reset entro un'ora.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Spiacente, non posso inviarti una email di verifica. Il tuo account NON è stato creato.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Invio email di verifica non riuscito! Errore: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Il tuo account è stato creato e ti ho inviato una email. Prego, clicca sul LINK DI VERIFICA contenuto in tale email.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Questo utente non esiste");
define("MESSAGE_USERNAME_BAD_LENGTH", "Il nomeutente non può essere più corto di 2 o più lungo di 64 caratteri");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Spiacente, la variazione del tuo nomeutente non è riuscita.");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Il tuo nomeutente è stato cambiato. Il nuovo nomeutente è ");
define("MESSAGE_USERNAME_EMPTY", "Nomeutente omesso");
define("MESSAGE_USERNAME_EXISTS", "Spiacente, nomeutente già utilizzato. Prego, scegline un'altro.");
define("MESSAGE_USERNAME_INVALID", "Il nomeutente non è conforme ai requisiti: sono ammesse solo lettere a-Z e numeri, da 2 a 64 caratteri");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Spiacente, il nomeutente indicato è lo stesso che stai usando. Prego, scegline un'altro.");

// views
define("WORDING_BACK_TO_LOGIN", "Torna alla pagina di accesso");
define("WORDING_CHANGE_EMAIL", "Cambia email");
define("WORDING_CHANGE_PASSWORD", "Cambia password");
define("WORDING_CHANGE_USERNAME", "Cambia nomeutente");
define("WORDING_CURRENTLY", "attualmente");
define("WORDING_EDIT_USER_DATA", "Modifica dati utente");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Sei connesso e puoi cambiare le tue credenziali qui");
define("WORDING_FORGOT_MY_PASSWORD", "Ho dimenticato la password");
define("WORDING_LOGIN", "Accesso");
define("WORDING_LOGOUT", "Esci");
define("WORDING_NEW_EMAIL", "Nuova email");
define("WORDING_NEW_PASSWORD", "Nuova password");
define("WORDING_NEW_PASSWORD_REPEAT", "Ripeti nuova password");
define("WORDING_NEW_USERNAME", "Nuovo nomeutente (nomeutente non può essere omesso e deve utilizzare i caratteri azAZ09 ed essere lungo 2-64 caratteri)");
define("WORDING_OLD_PASSWORD", "La tua VECCHIA password");
define("WORDING_PASSWORD", "Password");
define("WORDING_PROFILE_PICTURE", "La tua immagine del profilo (da gravatar):");
define("WORDING_REGISTER", "Registrati");
define("WORDING_REGISTER_NEW_ACCOUNT", "Registra nuovo account");
define("WORDING_REGISTRATION_CAPTCHA", "Prego, inserisci questi caratteri");
define("WORDING_REGISTRATION_EMAIL", "Email utente (prego, fornisci una email reale, riceverai una email di verifica con un link di attivazione)");
define("WORDING_REGISTRATION_PASSWORD", "Password (min. 6 caratteri!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Password ripeti");
define("WORDING_REGISTRATION_USERNAME", "Nomeutente (solo lettere e numeri, da 2 a 64 caratteri)");
define("WORDING_REMEMBER_ME", "Mantienimi connesso");
define("WORDING_REQUEST_PASSWORD_RESET", "Richiedi il reset della password.<br/>Inserisci il tuo nomeutente o la tua email, e riceverai una mail con le istruzioni:");
define("WORDING_RESET_PASSWORD", "Resetta la mia password");
define("WORDING_SUBMIT_NEW_PASSWORD", "Invia nuova password");
define("WORDING_USERNAME", "Nomeutente");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Hai fatto accesso come ");
