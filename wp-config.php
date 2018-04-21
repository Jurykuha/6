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
define('DB_NAME', 'global-techno');

/** Имя пользователя MySQL */
define('DB_USER', 'Jurykuha');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '167donuherV007');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?r~x+`h I*pkHy0D$.7?D }M,Hu~uyzq`mFCWX.Tgry6(!Ac6?M5,Jhky/aae<_,');
define('SECURE_AUTH_KEY',  '<PRMv>IN)qfB>k*!g=c8tm=2uM=&CJDnWP_-CC37nYy+Gm)2C5rU6KG:#CY#;Xq~');
define('LOGGED_IN_KEY',    'Sz1G~sGx$_H(w?p!-CP_/]h,xQUa_H))a$)jM`>SH|]NK@U2eOnM3<z[K.ix17@<');
define('NONCE_KEY',        'Si5a_v#_`wNB{?<lzoATpws!DW=,d]hrhEY^Tj,o]nXwKiA?5nKLQ6X,Qw1~(g_Y');
define('AUTH_SALT',        '1W`C$OD;CR&G9dCKOOc;9k5V`qt~3*=P8J-Imn_e_fhf(g{eGGp=zt#?hl&|A`Ds');
define('SECURE_AUTH_SALT', 'ZdCexbwUs`*mVQ^d_WyuMc:`^DPHegc)e_uXQiCcL8%dWHxTY75#OSVcp-E[$|A@');
define('LOGGED_IN_SALT',   'WEPsh9fmWG|M~a]dd0?(>R@.tns+EyC(6rm OVD>y8V21E(q[vS>&s:FjNYg#L`L');
define('NONCE_SALT',       '<TUP9pC3l(]~2GXkS >?#&H#sgs7D|Z%0vC%;O7J:VX4c0fe)p]pso!7,#t6@iXi');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
