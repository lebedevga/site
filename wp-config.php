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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '00 c{U^]BW9!euG~D56I~o+*^crkLGthI8,AH!F%DE6$_ndYLPoiVO2-?8_E60Tp' );
define( 'SECURE_AUTH_KEY',  'UK| ~f<[?-5GbL9O5gw~rTUg.LThNCzqp2d|F1O=~28tCks23VT385d{9zxd$x+d' );
define( 'LOGGED_IN_KEY',    'BIuidFlj1dX 5-_b,^ygaL}|tQ@D.6/3ONUl#Guy*0`9c9oOAGWOq,wgu%Bt,QZW' );
define( 'NONCE_KEY',        'eWMLO*[X5j*i?T5+;ixcCND7D<s7h}0P/BY?eJ|KrjhX~:ZSMWcL  JuVT${JyQ2' );
define( 'AUTH_SALT',        '4|Iez^X)p(q!l?5]`zwmI}X>1HEpwhIh39)5Dpq9QfwtR&jbp,~F}:@vPM*cc*1z' );
define( 'SECURE_AUTH_SALT', 'VO3y}O!X;N^9*x[x%-]Vw-?{`HmPwYsca+BNv>w.VS(2A_$Z.=ej6YJZnUe.WroA' );
define( 'LOGGED_IN_SALT',   'eN9*C/llLtk :{A,EnWW4u3G<RoT%G<a3b-wx8;SO%K]#@z3Yip]PNT$NZgJBsh^' );
define( 'NONCE_SALT',       '#P44-4R-HUck|-t?nkE`ehV^,x&gE ?hH{{,YWK}gW*VI5PT_YL@<s3RNyW}ZbA%' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
