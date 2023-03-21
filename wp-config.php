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
define( 'DB_NAME', 'lern' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Dasha' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '2005' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '`b16slHUgE^pZi[yi^4eQ:?g34a2}X9<:vl-Oqm1N5@rs{*nt+y:v/5^jxKz5x$S' );
define( 'SECURE_AUTH_KEY',  '#9[*>Toccl@([[V)N<zeR$u;{AJi!D~_m*+a)&Jewcu*=1*f6SYt$PEl67pgW+e%' );
define( 'LOGGED_IN_KEY',    'J[lEDupvH}>Rb)&(1;AuZ5N;I<+=>qL,/no2?KR#Omw{>^*g<)Q`,>t](tX}7:;;' );
define( 'NONCE_KEY',        '{8l2ZD9?gkq@@}9o*NacxbQYj>jXC-)1Ug:,j,[K+u}Zf8vMEEuk3L78/8ZQ^lV|' );
define( 'AUTH_SALT',        'Y3y3/eW*0ZL k:&dblJ?oArUp8]qz33lDS);v%npJYW%EBOx#;%+f ?5CdeeF.c.' );
define( 'SECURE_AUTH_SALT', 'X6D>)`/Ja!!JZLLZ.OW<0+!_ggeRyzCV1.RdF:W9[9fMm^ {2yP2n`/yQFy9f_Eo' );
define( 'LOGGED_IN_SALT',   '`$a;?nuwKJb=rU28mbT/J4PYr::]p<N(g!bcbn_2_PXsUbx4@3:c;YZM[7O)Ti&W' );
define( 'NONCE_SALT',       '{R@(#]p <|m]80E9M?z^b5#EW}CQ8Wl!VG1u>phIOw03#TfnR;Uo]y50,FI}}}Pl' );

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
