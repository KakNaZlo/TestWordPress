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
define( 'DB_NAME', 'my_theme' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'd/TVjr3P-]jm^?QG9WxXIe4^ey:*3 +XZVLIJ!&V6C9 Xy<*59gu1IB~Cyw[2Hj[' );
define( 'SECURE_AUTH_KEY',  't?E4te<6/?,Q9+bHJEa|zOGq4^JE`%<r8A PCY_^|DK80&vi!%8)8[Y&Kdq@=K3G' );
define( 'LOGGED_IN_KEY',    'yfs` >r;q@f-UqRKr8a~xaCt_N?+-ei0cZD5z:*Lz#mOVOdo^U$#+w$)|7h ULx)' );
define( 'NONCE_KEY',        'THrrg}K%D2<ltU,w:]fc@)VWQY)NAkjR4,K!%[.nHMcdafZrW}S1W_:@1suwz U;' );
define( 'AUTH_SALT',        '#cpK0cTIj6Y>uY7S[B!BN@RY*j66YU_?[lcE:0JV/8#;j-?ym{3A|vqu~TI@zNWA' );
define( 'SECURE_AUTH_SALT', '>IXFi&8xzNm/f9zk?5!r0a8t1YYa(8MG({Kx|YCAAH7W*XnWRgUD}AZyGtua#MG^' );
define( 'LOGGED_IN_SALT',   'Of</d8ak|2P*=pUrb8yrgD[])n/rA;G#.N0/.X[,^x!$P<$=7{BWCQ?aE2ceN,>k' );
define( 'NONCE_SALT',       '0D<,{aB0ys_b/,q3hb-:S]`F-$6L~{I*-u~~NvkXJlsgJMlYsrnt%G2-_9Og=6Ym' );

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
define ('ALLOW_UNFILTERED_UPLOADS', true);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
