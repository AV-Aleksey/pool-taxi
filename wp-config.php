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
define('DB_NAME', 'bh65076_pool-taxi');

/** Имя пользователя MySQL */
define('DB_USER', 'bh65076_fared1804');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Qwerty180492');

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
define('AUTH_KEY',         '*?Rd-g!U>AO0A_u75KlY2jmzMY#Oz)a|jV| 9G?*FDV86-F$wpTwLMR}.OAy9zxO');
define('SECURE_AUTH_KEY',  'Ze6:Z|){CY=vb*9puo.cH K7j=U.z^Oj5JdT4anLSEb9<B{jZRx~ep$@JosY`qjV');
define('LOGGED_IN_KEY',    ';G(eGI&0U:~%freafb/jX+HCdHAfJj5S>+lOQ6siQHoU>f:4AQo?~8..7NT`[/V3');
define('NONCE_KEY',        '0ti%Y>BE?kmEc%2(q>5?jZ$|0|-noq_x>7>ndFac$BwaIT?/FqIa2II8[#P9)n7^');
define('AUTH_SALT',        'I}uiNnI{PjV;xX46K.MM+8I!PuT[.E,;#5R5Rm.lj^{fVEwxpir/Br!_Mz%[8`0+');
define('SECURE_AUTH_SALT', '`{nLu3X!Pa[[Bo]7~4]_pLSR qlTI<H,w`%,v{Y}~^bx~|&k7AzzA<eW5FIl=e_N');
define('LOGGED_IN_SALT',   'I`R}|-0.OVNGi5K$Z7GxXh7S[F~vQv N=;55L9Uf.D*=Kwg>Ib5TqF3bu,<.M| -');
define('NONCE_SALT',       '`M Q&;><V!xC-TBp6: #2(<uYaq9? &f[jt9r{P%?w]E)A:<+~Ufu}[/$DW0FVnN');

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
