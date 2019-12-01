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
define( 'DB_NAME', 'webfocus' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '13f1s&wH&Q6iHxPqcRHk.<yZ5^)njBkG) 7e+s,dbFom@a$3G^*|u>G`v!QLmdTt' );
define( 'SECURE_AUTH_KEY',  'xz2Y a@)(:KkeN!y,zt^fcv8Ln7r+v1D1OP{B*=wb^$&JD7Fn(,LgJ& bIG0R8CD' );
define( 'LOGGED_IN_KEY',    'mP^:DepiAE[{kEPBw2<>/nPVP/(b%4_l={-;6f4gW~(H|jDl^Y.d$P@8KH`W|,QA' );
define( 'NONCE_KEY',        '7l?Q7p1jkR6|B0>^=littM6J3!ZO<EiU)Ykbosb/`yZfB5|/x0IXLB]/ep[>]ZMn' );
define( 'AUTH_SALT',        '8f;QZl7Yf|C[U!wJ{XE/5)_RDFT9O*/({3*%TX4b[QQlAz^#{pNS.6(o[Tf_,YLn' );
define( 'SECURE_AUTH_SALT', 'MP,-4^F]b]gG57D?]to{u7.SgX!zUMMx!qG&DtZ{jCCkH/iTzJ0O/vQt5q_BsJ@v' );
define( 'LOGGED_IN_SALT',   'o@ANSu>SHmiB+Ap83+7bOu%N(;7)bIr-2d^+2>i+0_>fD<K9;t.u(K!Ksu^qLjOb' );
define( 'NONCE_SALT',       'S-Tlz[]A3ytyikBia?aedEZqV?w=EJYG3za(W`HQgp*lFQ Cx$N)Qrcb^<b[!G|}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'xc_';

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
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
