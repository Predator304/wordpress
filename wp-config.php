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
define('DB_NAME', 'wordpress_DB');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '2SS5ObLcy/?u<x =np1;^b~,l2%hw+~b<@#,a[=.UfH*b!heJdX/Pmj((KbOowuj');
define('SECURE_AUTH_KEY',  'NnmG__s%_LWKydv:5>`z{5oA:.];OaNN60(&]wiP+Ck0 tl)t>;lj]TB;l:#0}#V');
define('LOGGED_IN_KEY',    'fkNSEouEo~9WdZ6<ScPP]5$&?i:R+mnH!4;pSSc>ltj`590tZ/:`(%`F}fh[So;z');
define('NONCE_KEY',        'u|Vj(aE&]X?Pe{~8`b:Wx4lB30CNk%-5uPfJxY2wTt/7>!QYqi8neO{0D:~xX;zj');
define('AUTH_SALT',        'x6[`U4B;RPwLZw/OC-_*NxvAW>@n#0j[DMl=/}~pes$Ur{&9o6z4pG5<EcNOL&EI');
define('SECURE_AUTH_SALT', '/U>Q7gQdDI!/ ^Ju,ryG!0tPF}hw~C0E9+cD:0l+;-WWrZU5d`_)^+r@Q}K]GXIM');
define('LOGGED_IN_SALT',   ':g}n~LHuG/hVaMUx[f#}jK |nJ?w%*Y+)`Es;^;hb20N~Ug3:& pL.:WJ[]t<DH;');
define('NONCE_SALT',       '|An5L!qM[F^5p+:k@D7d-WxM6L{^e3RqEj?0~=zTRJ&5&mpH/EwWe*8D4B>`j[)r');

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
