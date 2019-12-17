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
define('DB_NAME', 'amotion_fleet186');
/** Имя пользователя MySQL */
define('DB_USER', 'amotion_fleet186');
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'rybnkcde');
/** Имя сервера MySQL */
define('DB_HOST', 'amotion.mysql.ukraine.com.ua');
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
define('AUTH_KEY',         ',WRC?rt9w@FSV IUeQ< Bx;}_uV9sQ+r>4L$?Yf[dA-,Db.:LC~ ]rU/(M& !INe');
define('SECURE_AUTH_KEY',  '5+Z;n&,V:Z_9_a03))sl8-Oh#4/4% Ve]wX=,7@6amrL0[b9z4%{yZE{Hmsg|dB)');
define('LOGGED_IN_KEY',    '7P/+Fy:# G2/%,|{}!a:aLYB4IrIL)*[bj)_*!+P)4KOLh+x<u#m8L]/h|Q:d[/A');
define('NONCE_KEY',        'i_PxjEr4@X5N17p$|Ewl-YdB7d:l>/y~!oeJ3;tHh*.n,3EK/G:8(n+=0r{%.[++');
define('AUTH_SALT',        '(/ZYcXa;08v 2VCd$INW+065jx+6htAp<W3` bLVR;xd8lKZviWC_q0`{,Zyfte{');
define('SECURE_AUTH_SALT', '}l)@+UApMa;/UA-b !e6.(_--mTci!(v{fG4A{#${-)^>(|Y_Q63a|<cjotdk0Y<');
define('LOGGED_IN_SALT',   'J<&kG`bVD~ck;O*R}p-z}wKy%QS3pYI[,|[?Z-pGz[~x&c.l [g+x M~RT_-K=1g');
define('NONCE_SALT',       '?|7|{u+/jXT:)?uL<26Qs2uE<saD)1?m|~{==SAqpIjm_j[Y`|uHfm]*s} v`n6u');
/**#@-*/
/**
* Префикс таблиц в базе данных WordPress.
*
* Можно установить несколько сайтов в одну базу данных, если использовать
* разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
*/
$table_prefix  = 'flstr_';
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
