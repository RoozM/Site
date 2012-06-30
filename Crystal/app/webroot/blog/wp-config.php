<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Crystal_Blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qicvD1f+gpnx!QnxS.rNnB}po+8kKm%&]MJq9 ?yxSSBxg2gZbK@[v~Wqv6L(^d<');
define('SECURE_AUTH_KEY',  '6?M&J9]1(V~AiUJ=+0r:.+{mLX{A31PL:cE+Up-Bk3Ol)ve</.-?M!K?~B6Xn0sD');
define('LOGGED_IN_KEY',    'fq|Iiv-SOd& $.@:hd|l-{wq8l?)|RFc/aXexejU{*#A5{n[tOt2XTa4W0-O7_v.');
define('NONCE_KEY',        '9V81xPu0=HQ@D)fG],+)2oI Q7Xn4oV-?FB7i]05A|o;M:j>l/! beEiN/h84U*2');
define('AUTH_SALT',        'D&Zz]=tNT{vXQ_QN|@|-iZb&>!wzR>/%gd7uBQ:0;e2~9o+g[aw6l?s,^#T[x<+e');
define('SECURE_AUTH_SALT', '5TK/[@+58yPx3(Fd]^6K)O+VTE`34S<4WeFn-71u2P7Pnl_f=-@FndTu0<]s`-r+');
define('LOGGED_IN_SALT',   'xl9C-G5]I[kF.E115ex0&9Czn89^s=de|TD:r=^@!pi[+[.0-0ZK5H fOtUW0<i`');
define('NONCE_SALT',       'Z}nr>Ehf<nf;v>n=YU,o>8/,l;WCm<c[ $].k%GDMa)O@Ts-->[=?>PSQOYsZO9{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Sets up URL configuration */
define('WP_HOME','http://localhost/crystal/blog');
define('WP_SITEURL','http://localhost/crystal/app/webroot/blog/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
