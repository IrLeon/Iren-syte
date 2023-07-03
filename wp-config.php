<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'iren-syte' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wml-sFZh9J@c7f25A:m1ABM!AYMTmSeK`^P74/GkDrY}N@ DtntCu3C6/RO$l9Q]' );
define( 'SECURE_AUTH_KEY',  'Si#{y+J6EP_:c(=8n22pkJFSN`$V,@?*z1%Vu|{W!c#Wx]uoIZ~:PUVh>[bL?=E|' );
define( 'LOGGED_IN_KEY',    'WHvPlUq9II0I@|7+p^W/?Fr7ITw-GR_`L5Lk,F=IXl=0=okj|rVZFaBu}2vDww]Y' );
define( 'NONCE_KEY',        'iJV }gn9sr7:c([|Hyn9tIi+uwjI*76{NU>5V5e7Y+M}ZGfql^y`7_iU{/LW,3wg' );
define( 'AUTH_SALT',        '*)5i^Sh;fp-y<-rj3Yd+G{!qn?x097(6+a[<1[}nS0UW9SfZ8 fa]1ZYN~RBZXg*' );
define( 'SECURE_AUTH_SALT', ' G?q?i^?Ds!mETqNHXYgl[19=KY+$3]=:ErV7B$XRS/N^i[]Xst):/p&_$bTr;k:' );
define( 'LOGGED_IN_SALT',   'T9@gU}t7iQoYrU]Ha=rQQNj5)H@`^WyfUdd.y=5u(4R^t*zO7pl?&wOj3NU!hQhQ' );
define( 'NONCE_SALT',       '%<IeD3-)_2}4NV4UYD[L365~Un&3A[Z,uw<:*%7xZ=,#~uv@)c>Rqo0r`Sg4[S`#' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
