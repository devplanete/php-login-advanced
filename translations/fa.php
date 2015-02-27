<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "اکانت شما هنوز فعال نشده است. لطفا بر روی لینک تایید در ایمیل ارسال شده کلیک کنید.");
define("MESSAGE_CAPTCHA_WRONG", "کد امنیتی وارد شده اشتباه است!");
define("MESSAGE_COOKIE_INVALID", "کوکی نادرست است");
define("MESSAGE_DATABASE_ERROR", "اشکال در ارتباط با پایگاه داده.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "این آدرس ایمیل قبلا استفاده شده است. اگر رمز عبور آن را به یاد نمی آورید، لطفا از صفحه \"رمز عبور خود را فراموش کرده ام\" استفاده کنید.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "متاسفانه عملیات تغییر آدرس ایمیل با شکست مواجه شد.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "آدرس ایمیل شما به موفقیت تغییر کرد. آدرس ایمیل جدید هست ");
define("MESSAGE_EMAIL_EMPTY", "ایمیل نمی تواند خالی باشد");
define("MESSAGE_EMAIL_INVALID", "آدرس ایمیل شما در فرمت صحیح نیست.");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "متاسفانه این آدرس ایمیل با آدرس ایمیل قبلی شما یکسان است. لطفا یک آدرس ایمیل دیگر انتخاب کنید.");
define("MESSAGE_EMAIL_TOO_LONG", "ایمیل شما نمی تواند بیشتر از ۲۵۴ کاراکتر باشد.");
define("MESSAGE_LINK_PARAMETER_EMPTY", "لینک پارامتر اطلاعات خالی است.");
define("MESSAGE_LOGGED_OUT", "شما از سیستم خارج شدید.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "ورود ناموفق.");
define("MESSAGE_OLD_PASSWORD_WRONG", "رمز عبور قدیمی شما اشتباه است.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "رمز عبور و تکرار رمز عبور یکسان نیست.");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "متاسفانه تغییر رمز عبور با شکست مواجه شد.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "پسورد با موفقیت تغییر کرد!");
define("MESSAGE_PASSWORD_EMPTY", "فیلد رمز عبور خالی است");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "ایمیل ریست رمز عبور با موفقیت ارسال نشد! خطا: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "ایمیل ریست رمز عبور با موفقیت ارسال شد!");
define("MESSAGE_PASSWORD_TOO_SHORT", "حداقل طول رمز عبور ۶ کاراکتر است");
define("MESSAGE_PASSWORD_WRONG", "رمز عبور اشتباه است. دوباره سعی کنید.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "شما رمز عبور را بیش از سه بار اشتباه وارد کرده اید. لطفا ۳۰ ثانیه صبر کنید و مجددا تلاش کنید.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "متاسفانه چنین ترکیب کد شناسه/تایید اینجا وجود ندارد...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "با موفقیت فعال شد! حالا شما می توانید وارد شوید!");
define("MESSAGE_REGISTRATION_FAILED", "متاسفانه ثبت نام شما با شکست مواجه شد. لطفا به صفحه قبل برگردید و دوباره سعی کنید.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "لینک ریست شما منقضی شده است. لطفا از لینک ریست در یک ساعت استفاده کنید.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "متاسفانه ما نتوانستیم برای شما لینک تایید ارسال کنیم. حساب کاربری شما ساخته نشده است.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "ایمیل تایید شما با موفقیت ارسال نشد! خطا: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "حساب کاربری شما با موفقیت ایجاد شد و ایمیل تایید برای شما ارسال شد. لطفا بر روی لینک تایید موجود در ایمیل ارسالی کلیک کنید.");
define("MESSAGE_USER_DOES_NOT_EXIST", "این کاربر وجود ندارد");
define("MESSAGE_USERNAME_BAD_LENGTH", "نام کاربری نمی تواند کمتر از ۲ یا بیشتر از ۶۴ کاراکتر باشد");
define("MESSAGE_USERNAME_CHANGE_FAILED", "متاسفانه تغییر نام کاربری با شکست مواجه شد.");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "نام کاربری شما با موفقیت تغییر کرد. نام کاربری جدید هست ");
define("MESSAGE_USERNAME_EMPTY", "فیلد نام کاربری خالی است");
define("MESSAGE_USERNAME_EXISTS", "متاسفانه این نام کاربری قبلا استفاده شده است. لطفا یکی دیگر انتخاب کنید.");
define("MESSAGE_USERNAME_INVALID", "شمای نام کاربری صحیح نیست: تنها a-Z و اعداد مجاز است, ۲ تا ۶۴ کاراکتر");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "متاسفانه این نام کاربری با نام کاربری الان شما یکسان است. لطفا یکی دیگر انتخاب کنید.");

// views
define("WORDING_BACK_TO_LOGIN", "برگشت به صفحه ورود");
define("WORDING_CHANGE_EMAIL", "تغییر آدرس ایمیل");
define("WORDING_CHANGE_PASSWORD", "تغییر رمز عبور");
define("WORDING_CHANGE_USERNAME", "تغییر نام کاربری");
define("WORDING_CURRENTLY", "در حال حاضر");
define("WORDING_EDIT_USER_DATA", "تغییر اطلاعات کاربری");
define("WORDING_EDIT_YOUR_CREDENTIALS", "شما وارد شده اید و می توانید مشخصات خود را تغییر دهید");
define("WORDING_FORGOT_MY_PASSWORD", "رمز عبور را فراموش کرده ام");
define("WORDING_LOGIN", "ورود");
define("WORDING_LOGOUT", "خروج");
define("WORDING_NEW_EMAIL", "ایمیل جدید");
define("WORDING_NEW_PASSWORD", "رمز عبور جدید");
define("WORDING_NEW_PASSWORD_REPEAT", "تکرار رمز عبور");
define("WORDING_NEW_USERNAME", "نام کاربری جدید (نام کاربری نمی تواند خالی باشد و باید azAZ09 و 2-64 کاراکتر باشد)");
define("WORDING_OLD_PASSWORD", "رمز عبور قدیمی شما");
define("WORDING_PASSWORD", "رمز عبور");
define("WORDING_PROFILE_PICTURE", "تصویر پروفایل شما (از gravatar):");
define("WORDING_REGISTER", "ثبت نام");
define("WORDING_REGISTER_NEW_ACCOUNT", "ثبت نام حساب کاربری جدید");
define("WORDING_REGISTRATION_CAPTCHA", "لطفا این کاراکتر ها را وارد کنید");
define("WORDING_REGISTRATION_EMAIL", "ایمیل کاربر (لطفا یک ایمیل صحیح وارد کنید, شمایک ایمیل تایید با لینک فعال سازی دریافت خواهید کرد)");
define("WORDING_REGISTRATION_PASSWORD", "رمز عبور (حداقل ۶ کاراکتر!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "تکرار رمز عبور");
define("WORDING_REGISTRATION_USERNAME", "نام کاربری (تنها حروف انگلیسی و اعداد, ۲ تا ۶۴ کاراکتر)");
define("WORDING_REMEMBER_ME", "من را در حالت ورود نگهدار");
define("WORDING_REQUEST_PASSWORD_RESET", "تکرار ریست رمز عبور.<br/>نام کاربری یا ایمیل خور را وارد کنید, و شما ایمیل با این دستور العمل دریافت خواهید کرد:");
define("WORDING_RESET_PASSWORD", "ریست رمز عبور");
define("WORDING_SUBMIT_NEW_PASSWORD", "ثبت رمز عبور جدید");
define("WORDING_USERNAME", "نام کاربری");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "شما وارد شده اید با نام ");
