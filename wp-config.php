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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'childhood_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '135531' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );


define('FS_METHOD', 'direct');


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
define( 'AUTH_KEY',         'w1<2.!xi!Hm#FB<}P{;Ey>{^8KBeR>9|$$]DKH8%tb8>QeA_?X,YoP[(qRu0%DD_' );
define( 'SECURE_AUTH_KEY',  'U[*O!94DQR.-Cn3XDrmPvy!R^b[W8D#Pu $XL1)vl|CQ/tqL1M|F,Zay!@<ovr6y' );
define( 'LOGGED_IN_KEY',    'c XQ@YcO7`s6M$7_Tt{[P7=[VKUH[3zU]h89Dujw]#$~PU=:H1LN5qqpi8(7=#u|' );
define( 'NONCE_KEY',        '_T^GtR&}/[XOJ3R553;:$T?M5~[,5U>KzW WuFxJd9icO*u5C,dC}0[S!Z7vaj2&' );
define( 'AUTH_SALT',        '6tXgG1bvzTO!LnL7TGrM1dRaS#IYg$X/cO`l|MZInm|Lcq{C=Gm=-X/IUIux({L$' );
define( 'SECURE_AUTH_SALT', 'u.`M7Bo9T@*4!~e# PiEb,tGJGtpLm3-ndUobKNmg:`~ti5o$V1piZ#644]r5d=!' );
define( 'LOGGED_IN_SALT',   ']Cz#6lCBL[=U%Mz^@D8bZY{Ajh13;F|*nz)42zMe*+Q?qm|G<c5kXoQ[m^zL&9KA' );
define( 'NONCE_SALT',       '*P/q}SmRbV$jH>A2F?}#D_m_DTTy`0<_J$JHnLG1U@A>aL1fX_SSv)yH)M7%^A<r' );

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


