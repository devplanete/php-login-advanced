<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Votre compte n'est pas encore activé. Merci de cliquer sur le lien de confirmation dans le mail d'enregistrement.");
define("MESSAGE_CAPTCHA_WRONG", "Le code de l'image de vérification est invalide.");
define("MESSAGE_COOKIE_INVALID", "Cookie invalide");
define("MESSAGE_DATABASE_ERROR", "Problème de connexion à la base de données.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Cette adresse email est déjà enregistrée. Merci d'utiliser le lien \"J'ai oublié mon mot de passe\" si vous avez oublié votre mot de passe.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Désolé, une erreur s'est produite durant le changement de votre adresse email.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Votre adresse email a été changée. Votre addresse email est maintenant ");
define("MESSAGE_EMAIL_EMPTY", "L'adresse email ne peut pas être vide");
define("MESSAGE_EMAIL_INVALID", "Cette adresse email n'a pas un format valide");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Désolé, cette adresse email est déjà le votre. Merci d'en choisir un autre");
define("MESSAGE_EMAIL_TOO_LONG", "L'adresse email doit contenir au maximum 254 caractères");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Paramètre du lien incorrect.");
define("MESSAGE_LOGGED_OUT", "Vous avez été deconnecté.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Identifiant ou mot de passe incorrect.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Votre ancien mot de passe n'est pas correct.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Le 2 mots de passe ne sont pas identiques");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Désolé, une erreur s'est produite durant l'enregistrement de votre nouveau mot de passe.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Votre mot de passe a été changé !");
define("MESSAGE_PASSWORD_EMPTY", "Le mot de passe est vide");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Une erreur s'est produite durant l'envoi du mail de réinitialisation de votre mot de passe ! Erreur : ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Le mail de réinitialisation de votre mot de passe a été envoyé !");
define("MESSAGE_PASSWORD_TOO_SHORT", "Le mot de passe doit contenir au minimum 6 caractères");
define("MESSAGE_PASSWORD_WRONG", "Mot de passe incorrect. Essayez à nouveau.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Vous avez déjà entré un mot de passe incorrect 3 fois ou plus. Merci d'attendre 30 secondes pour essayer à nouveau.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Désolé, la combinaison id/code de vérification est invalide...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Votre compte a été activé ! Vous pouvez maintenant vous connectez !");
define("MESSAGE_REGISTRATION_FAILED", "Désolé, une erreur s'est produite durant votre enregistrement. Merci de recommencer.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Ce lien de réinitialisation du mot de passe est expiré. Il n'est actif que pendant une heure.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Désolé, impossible de vous envoyez le mail de vérification. Votre compte n'a pas été créé.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Impossible de vous envoyez le mail de vérification ! Erreur : ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Votre compte utilisateur a été créé et un email de vérification vous a été envoyé. Merci de cliquer sur le LIEN DE VERIFICATION de cet email pour activer votre compte.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Cet utilisateur n'existe pas");
define("MESSAGE_USERNAME_BAD_LENGTH", "Le nom d'utilisateur doit contenir entre 2 et 64 caractères");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Désolé, une erreur s'est produite durant le changement de votre nom d'utilisateur.");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Votre nom d'utilisateur a été changé. Votre nom d'utilisateur est maintenant ");
define("MESSAGE_USERNAME_EMPTY", "Le nom d'utilisateur est vide");
define("MESSAGE_USERNAME_EXISTS", "Désolé, ce nom d'utilisateur est déjà utilisé. Merci d'en choisir un autre.");
define("MESSAGE_USERNAME_INVALID", "Nom d'utilisateur invalide : seul les lettres a-Z et les chiffres sont autorisés, longueur de 2 à 64 caractères");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Désolé, ce nom d'utilisateur est déjà le votre. Merci d'en choisir un autre.");

// views
define("WORDING_BACK_TO_LOGIN", "Revenir à la page de connexion");
define("WORDING_CHANGE_EMAIL", "Changer l'adresse email");
define("WORDING_CHANGE_PASSWORD", "Changer le mot de passe");
define("WORDING_CHANGE_USERNAME", "Changer le nom d'utilisateur");
define("WORDING_CURRENTLY", "actuellement");
define("WORDING_EDIT_USER_DATA", "Modifier mon compte");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Vous êtes connecté et pouvez modifier vos informations de connexion ici");
define("WORDING_FORGOT_MY_PASSWORD", "J'ai oublié mon mot de passe");
define("WORDING_LOGIN", "Connexion");
define("WORDING_LOGOUT", "Déconnexion");
define("WORDING_NEW_EMAIL", "Nouvelle adresse email");
define("WORDING_NEW_PASSWORD", "Nouveau mot de passe");
define("WORDING_NEW_PASSWORD_REPEAT", "Repéter le nouveau mot de passe");
define("WORDING_NEW_USERNAME", "Nouveau nom d'utilisateur (seul les lettres a-Z et les chiffres sont autorisés, longueur de 2 à 64 caractères)");
define("WORDING_OLD_PASSWORD", "Ancien mot de passe");
define("WORDING_PASSWORD", "Mot de passe");
define("WORDING_PROFILE_PICTURE", "Photo de profil (depuis gravatar) :");
define("WORDING_REGISTER", "S'enregistrer");
define("WORDING_REGISTER_NEW_ACCOUNT", "Créer un nouveau compte");
define("WORDING_REGISTER_NEW_ACCOUNT_ADMIN", "???Register new account for a user???");
define("WORDING_REGISTRATION_CAPTCHA", "Saisir les caractères de l'image ci-dessus");
define("WORDING_REGISTRATION_EMAIL", "E-mail (merci de fournir une adresse valide car vous recevrez un mail de vérification avec un lien d'activation)");
define("WORDING_REGISTRATION_PASSWORD", "Mot de passe (min. 6 caractères)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Mot de passe repéter");
define("WORDING_REGISTRATION_USERNAME", "Nom d'utilisateur (seulement des lettres et des chiffres, de 2 à 64 caractères)");
define("WORDING_REMEMBER_ME", "Resté connecté");
define("WORDING_REQUEST_PASSWORD_RESET", "Démander la réinitialisation de mon mot de passe. Saisir votre nom d'utilisateur et vous recevrez un mail avec les instructions :");
define("WORDING_RESET_PASSWORD", "Réinitialiser mon mot de passe");
define("WORDING_SUBMIT_NEW_PASSWORD", "Soumettre le nouveau mot de passe");
define("WORDING_USERNAME", "Nom d'utilisateur");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Vous êtes connecté en tant que ");
