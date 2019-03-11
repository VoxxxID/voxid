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
define( 'DB_NAME', 'voxid_bd' );

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
define( 'AUTH_KEY',         '=1$xc(P,i27n[>:tU8<RX;5|:o :M!x9LO9DC@j=u/Qg)(W2Z4KMvZR~SRv4&:=?' );
define( 'SECURE_AUTH_KEY',  'gcO`.7qxGq_[rN x1c`vY]VP`aWq`oelvdO{H==wN_Ob4MK!@$x/j3B|P*}S9z`w' );
define( 'LOGGED_IN_KEY',    '9E5Iv:F*f$xFd[s*IadEYHoH6v3b>k8OmjA>>_y&1 Sf0?Xr:d#+6N+b%chfoyM)' );
define( 'NONCE_KEY',        '|VQPQq<Y_OG+yU9I.`rnairR]nHN*>{JrMh5^H}%/xK:`yYy2]JbohuCf&Bma$m{' );
define( 'AUTH_SALT',        '~X A|A|FhD-[j*kz:s|>BNN|Bw*<~?{V@g6?;!V4s_62&h0P@Cg`GVR52KHn<I3a' );
define( 'SECURE_AUTH_SALT', 'ksOz*u(D<aBcnv8cax1x<b2FeW$39(K?1m6FLk@`*h$QT,J,6&z+nc[`2w1[.og@' );
define( 'LOGGED_IN_SALT',   'F9fSrAIVpPL-56~7`!?qnPaW%lQ*{2!P!A`YM~m8 f*r4-C&N?gxQYI}cm99wtN}' );
define( 'NONCE_SALT',       'Z[d?`PBQ#](O!R-,qGNjVAY#ioU@8uD2S$,Zn>yd4CPjNVrU0q7NH0~|gKI#9)!-' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
