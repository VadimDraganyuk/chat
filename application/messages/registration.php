<?php defined('SYSPATH') or die('No direct script access.');

return array(

    'password.not_empty' => 'Поле пароль не может быть пустым',
    'password.alpha_numeric' => 'В поле пароль можно использовать только латинские буквы и цифры',
    'password.min_length' => 'Пароль должен быть не меньше :param2 символов',
    'password.max_length' => 'Пароль должен быть не больше :param2 символов',

    'password_confirm.matches' => 'Пароль должны совпадать',


    'email.not_empty' => 'Поле e-mail не может быть пустым',
    'email.email' => 'Неверный формат e-mail',
    'Model_User::unique_email' => 'Пользователь с такой почтой уже зарегистрирован',
    'Model_User::unique_login' => 'Пользователь с таким именем уже зарегистрирован',

    'rules.not_empty' => "Необходимо согласиться с 'Условиями и правилами пользования ресурсом'",

    'country.not_empty' => 'Ошибка выбора страны',

    'phone.not_empty' => 'Поле телефон не может быть пустым',
    'phone.digit' => 'В поле телефон можно использовать только цифры',

    'code.not_empty' => 'Поле код не может быть пустым',
    'code.digit' => 'В поле код можно использовать только цифры',
    'code.min_length' => 'Код должен быть не меньше :param2 символов',
    'code.max_length' => 'Код должен быть не больше :param2 символов',

    'old_password.not_empty' => 'Пароль от старого аккаунта не может быть пустым',
    'old_email.not_empty' => 'E-mail старого аккаунта не может быть пустым',
    'old_email.email' => 'Неверный формат e-mail старого аккаунта',

    'data.not_empty' => 'Поле не может быть пустым',
    'data.email' => 'Неверный формат e-mail',
    'data.digit' => 'В поле телефон можно использовать только цифры',
    'Model_User::unique_phone' => 'Пользователь с таким номером телефона уже зарегистрирован',
);
