<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define('MESSAGE_ACCOUNT_NOT_ACTIVATED', 'Ваш аккаунт ещё не подтверждён. Пожалуйста перейдите по ссылке подтверждения в переданном вам письме.');
define('MESSAGE_CAPTCHA_WRONG', 'Captcha введена не правильно!');
define('MESSAGE_COOKIE_INVALID', 'Cookie не верны');
define('MESSAGE_DATABASE_ERROR', 'Проблема подключения к базе данных.');
define('MESSAGE_EMAIL_ALREADY_EXISTS', 'Этот e-mail адрес уже был зарегистрирован. Воспользуйтесь страницей "Я забыл пароль" если вы не можете войти.');
define('MESSAGE_EMAIL_CHANGE_FAILED', 'Извините, смена e-mail не удалась.');
define('MESSAGE_EMAIL_CHANGED_SUCCESSFULLY', 'E-mail адрес сменён успешно. Ваш новый адрес ');
define('MESSAGE_EMAIL_EMPTY', 'E-mail не может быть пустым');
define('MESSAGE_EMAIL_INVALID', 'E-mail адрес не соответствует формату');
define('MESSAGE_EMAIL_SAME_LIKE_OLD_ONE', 'Новый e-mailадрес не должен совпадать со старым.');
define('MESSAGE_EMAIL_TOO_LONG', 'E-mail адрес не может быть длиннее 254 символов');
define('MESSAGE_LINK_PARAMETER_EMPTY', 'Empty link parameter data.');// @todo decide what is it
define('MESSAGE_LOGGED_OUT', 'Вы вышли');
// The 'login failed'-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define('MESSAGE_LOGIN_FAILED', 'Вход не удался');
define('MESSAGE_OLD_PASSWORD_WRONG', 'Ваш СТАРЫЙ пароль указан неверно');
define('MESSAGE_PASSWORD_BAD_CONFIRM', 'Проверочный пароль не совпадает');
define('MESSAGE_PASSWORD_CHANGE_FAILED', 'Извините, смена пароля не удалась.');
define('MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY', 'Пароль успешно сменён!');
define('MESSAGE_PASSWORD_EMPTY', 'Поле пароля пусто');
define('MESSAGE_PASSWORD_RESET_MAIL_FAILED', 'Письмо сброса пароля НЕ доставлено! Ошибка: ');
define('MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT', 'Письмо сброса пароля успешно доставлено!');
define('MESSAGE_PASSWORD_TOO_SHORT', 'Пароль не может быть короче 6-ти символов');
define('MESSAGE_PASSWORD_WRONG', 'Пароль введён не верно. Попробуйте ещё раз.');
define('MESSAGE_PASSWORD_WRONG_3_TIMES', 'Вы ошиблись в воде пароля более двух раз. Попробуйте снова не ранее чем через 30 секунд, пожалуйста.');
define('MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL', 'Извините, такой код подтверждения не существует...');
define('MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL', 'Подтверждение завершено успешно! Теперь вы можете войти!');
define('MESSAGE_REGISTRATION_FAILED', 'Извините, регистрация не удалась! Пожалуйста вернитесь назад и попробуйте снова.');
define('MESSAGE_RESET_LINK_HAS_EXPIRED', 'Ваша ссылка подтверждения устарела (ссылки действуют в течении часа). Воспользуйтесь страницей "Я забыл пароль".');
define('MESSAGE_VERIFICATION_MAIL_ERROR', 'Извините, неудаётся выслать вам e-mail для подтверждения. Ваш аккаунт НЕ может быть создан.');
define('MESSAGE_VERIFICATION_MAIL_NOT_SENT', 'Письмо для подтверждения НЕ доставлено! Ошибка: ');
define('MESSAGE_VERIFICATION_MAIL_SENT', 'Ваш аккаунт успешно создан и вам отправлено письмо подтверждения. Пожалуйста, перейдите по содержащейся в нём ссылке!');
define('MESSAGE_USER_DOES_NOT_EXIST', 'Пользователь не существует');
define('MESSAGE_USERNAME_BAD_LENGTH', 'Ник должен быть блинной 2-64 символов');
define('MESSAGE_USERNAME_CHANGE_FAILED', 'Извините, смена ника не удалась!');
define('MESSAGE_USERNAME_CHANGED_SUCCESSFULLY', 'Ник успешно изменён. Ваш новый ник ');
define('MESSAGE_USERNAME_EMPTY', 'Поле Ник пусто');
define('MESSAGE_USERNAME_EXISTS', 'Извините, пользователь с таким ником уже существует. Пожалуйста, выбирите другой.');
define('MESSAGE_USERNAME_INVALID', 'Ник должен сожержать латинские символы и цифры и быть блинной 2-64 символов');
define('MESSAGE_USERNAME_SAME_LIKE_OLD_ONE', 'Новый ник совпадает со старым. Пожалуйста выбирете другой.');

// views
define('WORDING_BACK_TO_LOGIN', 'Вернуться на страницу авторизации');
define('WORDING_CHANGE_EMAIL', 'Сменить e-mail');
define('WORDING_CHANGE_PASSWORD', 'Сменить пароль');
define('WORDING_CHANGE_USERNAME', 'Сменить ник');
define('WORDING_CURRENTLY', 'текущий');
define('WORDING_EDIT_USER_DATA', 'Редактировать профиль');
define('WORDING_EDIT_YOUR_CREDENTIALS', 'Вы вошли и можете отредактировать ваш профиль здесь');
define('WORDING_FORGOT_MY_PASSWORD', 'Я зыбыл пароль');
define('WORDING_LOGIN', 'Вход');
define('WORDING_LOGOUT', 'Выход');
define('WORDING_NEW_EMAIL', 'Новое письмо');
define('WORDING_NEW_PASSWORD', 'Новый пароль');
define('WORDING_NEW_PASSWORD_REPEAT', 'Повторить пароль');
define('WORDING_NEW_USERNAME', 'Новый ник (ник должен сожержать латинские символы и цифры и быть блинной 2-64 символов)');
define('WORDING_OLD_PASSWORD', 'Ваш старый пароль');
define('WORDING_PASSWORD', 'Пароль');
define('WORDING_PROFILE_PICTURE', 'Ваше изображение (Gravatar):');
define('WORDING_REGISTER', 'Регистрация');
define('WORDING_REGISTER_NEW_ACCOUNT', 'Зарегистрировать новый аккаунт');
define('WORDING_REGISTRATION_CAPTCHA', 'Введите пожалуйста символы с изображения');
define('WORDING_REGISTRATION_EMAIL', 'Ваш e-mail (пожалуйста, указывайте существующий адрес, вы получите письмо для подтверждения)');
define('WORDING_REGISTRATION_PASSWORD', 'Пароль (мин. 6 символов!)');
define('WORDING_REGISTRATION_PASSWORD_REPEAT', 'Повторите пароль');
define('WORDING_REGISTRATION_USERNAME', 'Ник (От 2 до 64 латинских символов и цифр)');
define('WORDING_REMEMBER_ME', 'Запомнить меня');
define('WORDING_REQUEST_PASSWORD_RESET', 'Сбросить пароль. Введите ваш ник и ждите письмо:');
define('WORDING_RESET_PASSWORD', 'Сбросить пароль');
define('WORDING_SUBMIT_NEW_PASSWORD', 'Подтвердить изменение пароля');
define('WORDING_USERNAME', 'Ник');
define('WORDING_YOU_ARE_LOGGED_IN_AS', 'Вы вошли как ');
