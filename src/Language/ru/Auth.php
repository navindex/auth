<?php

return [
	// Exceptions
	'invalidModel'              => 'Модель [{0}] должна быть загружена перед использованием.',
	'userNotFound'              => 'Не удалось найти пользователя с ID = {0, number}.',
	'noUserEntity'              => 'User Entity должна обеспечивать проверку пароля.',
	'tooManyCredentials'        => 'Вы можете проверить только 1 сущность отличную от пароля.',
	'invalidFields'             => 'Поле "{0}" не может быть использовано для проверки учетных данных.',
	'unsetPasswordLength'       => 'Вы должны задать параметр `minimumPasswordLength` в конфигурационном файле Auth.',
	'unknownError'              => 'Извините, произошла ошибка при отправке вам электронного письма. Пожалуйста, попробуйте позже.',
	'notLoggedIn'               => 'Для получения доступа к этой странице вы должны авторизоваться.',
	'notEnoughPrivilege'        => 'У вас недостаточно прав для посещения этой страницы.',

	// Registration
	'registerDisabled'          => 'Извините, на данный момент регистрация новых пользователей запрещена.',
	'registerSuccess'           => 'Добро пожаловать! Пожалуйста, авторизуйтесь, используя данные для входа.',
	'registerCLI'               => 'Создан новый пользователь: {0}, #{1}',

	// Activation
	'activationNoUser'          => 'Не удалось найти пользователя с указанным активационным кодом.',
	'activationSubject'         => 'Активируйте ваш аккаунт',
	'activationSuccess'         => 'Пожалуйста, активируйте аккаунт, кликнув по ссылке в письме.',
	'notActivated'              => 'Этот аккаунт ещё не был активирован.',
	'errorSendingActivation'    => 'Произошла ошибка при отправке письма пользователю: {0}',

	// Login
	'badAttempt'                => 'Не удалось войти в аккаунт. Пожалуйста, проверьте данные для входа.',
	'loginSuccess'              => 'С возвращением!',

	// Forgotten Passwords
	'forgotDisabled'            => 'Resseting password option has been disabled.', // translate
	'forgotNoUser'              => 'Не удалось найти пользователя с этим email.',
	'forgotSubject'             => 'Восстановление пароля',
	'resetSuccess'              => 'Ваш пароль был успешно изменен. Пожалуйста, войдите, используя новый пароль.',
	'forgotEmailSent'           => 'Токен безопасности был отправлен на ваш email. Введите его в поле ниже.',
	'errorEmailSent'            => 'Unable to send email with password reset instructions to: {0}', // translate

	// Passwords
	'errorPasswordLength'        => 'Длина пароля должна быть не менее {0, number} символов(а).',
	'suggestPasswordLength'      => 'Пароли - длиной до 255 символов - создавайте более надежные пароли, которые легко запомнить.',
	'errorPasswordCommon'        => 'Пароль не должен быть общеизвестной фразой.',
	'suggestPasswordCommon'      => 'Пароль был проверен по более чем 65 тысячам наиболее часто используемых паролей или паролей, которые утекли через взломы.',
	'errorPasswordPersonal'      => 'Пароли не могут содержать перефразированные персональные данные.',
	'suggestPasswordPersonal'    => 'Вариации вашего email адреса или логина не должны быть использованы в качестве паролей.',
	'errorPasswordTooSimilar'    => 'Пароль слишком похож на логин.',
	'suggestPasswordTooSimilar'  => 'Не используйте части логина в пароле.',
	'errorPasswordPwned'         => 'Пароль {0} был раскрыт из-за взлома и встречался {1, number} раз(а) в {2} скомпрометированных паролях.',
	'suggestPasswordPwned'       => '{0} нельзя использовать в пароле. Если вы используете это где-либо ещё, немедленно смените пароль.',
	'errorPasswordEmpty'         => 'Пароль должен быть заполнен.',
	'passwordChangeSuccess'      => 'Пароль успешно изменен.',
	'userDoesNotExist'           => 'Пароль не был изменен. Пользователь не существует.',
	'resetTokenExpired'          => 'К сожалению, срок действия токена для сброса пароля истек.',

	// Groups
	'groupNotFound'             => 'Не удалось найти группу: {0}.',

	// Permissions
	'permissionNotFound'        => 'Не удалось найти разрешение: {0}',

	// Banned
	'userIsBanned'              => 'Пользователь заблокирован. Свяжитесь с администрацией.',

	// Too many requests
	'tooManyRequests'           => 'Слишком много попыток. Пожалуйста, подождите {0, number} секунд(ы).',

	// Login views
	'home'                      => 'Домой',
	'current'                   => 'Текущий',
	'forgotPassword'            => 'Забыли пароль?',
	'enterEmailForInstructions' => 'Нет проблем! Введите ваш email в форму ниже, и мы вышлем вам письмо с инструкциями по восстановлению пароля.',
	'email'                     => 'Email',
	'emailAddress'              => 'Email адрес',
	'sendInstructions'          => 'Отправить инструкции',
	'loginTitle'                => 'Вход',
	'loginAction'               => 'Войти',
	'rememberMe'                => 'Запомнить меня',
	'needAnAccount'             => 'Нужен аккаунт?',
	'forgotYourPassword'        => 'Забыли пароль?',
	'password'                  => 'Пароль',
	'repeatPassword'            => 'Повторите пароль',
	'emailOrUsername'           => 'Email или логин',
	'username'                  => 'Логин',
	'register'                  => 'Регистрация',
	'signIn'                    => 'Вход',
	'alreadyRegistered'         => 'Уже зарегистрированы?',
	'weNeverShare'              => 'Мы не передаем ваш email третьим лицам.',
	'resetYourPassword'         => 'Сбросить пароль',
	'enterCodeEmailPassword'    => 'Введите код из письма, которое вы получили, ваш email адрес и ваш новый пароль.',
	'token'                     => 'Токен',
	'newPassword'               => 'Новый пароль',
	'newPasswordRepeat'         => 'Повторите пароль',
	'resetPassword'             => 'Сбросить пароль',
];
