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
define('DB_NAME', 'master');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'B.#b-;/}.!|+EP<hZ!#$}OolO#rGvoD,:GAsg/ug218<N:Fv!bU.z|4E90 b-MJb');
define('SECURE_AUTH_KEY',  '+^1HwszVOS6LtBbG5J gxn>wX!u<^!`awr&_}wPGW~Q^g|TBvdxq?.w>,|n2Ro .');
define('LOGGED_IN_KEY',    '!Q)-d}n&/LNA$zX@Au(|_=Fl.m-rlesN<mjI p/.N$AsE-$maQ* Vf!d} u*;[WD');
define('NONCE_KEY',        '#eG(kOG)TAZ?Dwp+AQxp3N+{+,4+(,on>@;=o,mODJ8tQv30o6cTns u<0EYBev0');
define('AUTH_SALT',        'q*c3p1aR^2&x{{F:U^IOG7cC7c_o]B@UcA4sqN{E3J_&>@/a#&i4tQ[Z$awMf5ix');
define('SECURE_AUTH_SALT', 'B/D#P =sP)x&MAZ!CI}^FwcXC!Tbms|hDs|H10la1gqv5EK]d79S;VcYwjIH_n^Y');
define('LOGGED_IN_SALT',   't*}-g?WucNURUF|g_D!xR%,QH*L0:*V@}N#c9@5jV(JA5|bmZ.q5;OFzCA_ tf&]');
define('NONCE_SALT',       ')H=sRjRD*3 XXz&N9Hk<(y]pLPk$hNW429P|tIu(+B:wD,4Z9=&-|,EfiYlK ~K|');

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
