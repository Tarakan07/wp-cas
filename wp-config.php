<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ci40190_kogda');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'db');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4)/EjO&RZoL,K+K))l(rR!T,1dRbv0}hUkN`H(`kcRZH*qB-Wlta=qIzRTi8^Sp2');
define('SECURE_AUTH_KEY',  'MlaGhNmC;FHcQnEog2v&F.fqfZIU..eP|Q|caW^gJ1&Q>xDN+mWh+)G%Q_P#WuP!');
define('LOGGED_IN_KEY',    'PFXU`e?3`sP`:mYcpMCKL`KfI,}aD|ln-,4{M&M?iGwS>a)IRHG#yz4[9o9kVh.I');
define('NONCE_KEY',        'hJxF!#p`h?B/kH>|M4jDNAFGto1XMzM<wU{SO9*M+gB7,U+ Nk:$?c=Og/wp[ag(');
define('AUTH_SALT',        '8w!*4:YiCSsxAUe*tMQ7Y#.u$kuG3Ihq_Q#T1:D@[OB9w5l)H%PWfzDgS8rrpoOg');
define('SECURE_AUTH_SALT', '@(I.B@}B^W_P( _Z0o>EsEfOxAQV.@*I<^Y^/ha/_xS)<N?K*RqwD%.G|}XpXuOo');
define('LOGGED_IN_SALT',   ';XtJLI]Bl>mk`z]*)={j_;RNRV4)afsp`jk|(x.w6oM?16}1A,lI?M3tQ{78fy1)');
define('NONCE_SALT',       'FS.MCP4{-58ZxnAa6._M{]_l;PeLKPVXJ.tK1vIPT1.#?$#!j;yb?f*X[4(HY^?N');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ko_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
