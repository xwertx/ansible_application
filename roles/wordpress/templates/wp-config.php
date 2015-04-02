<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't@rLSc1s7g7Bj)oS3*RU)s627aNVZ/spSf4t.T*hk0I8%EbfF12sw<85P_D?&ao{');
define('SECURE_AUTH_KEY',  ':x8LW%I%J-c$y^R{f&9:^~IJpVkN9-|{~cD|p?.!A?!mqFM=5|!8&X!*DZEBe{~8');
define('LOGGED_IN_KEY',    'Xi2nP_Y6g/8JX){<N{;Y|y<a*^Ek-4cMG-EmgggI4&&p|r[eSDVl5.t[,6w]_kY9');
define('NONCE_KEY',        '$+Ei=]dWea@h1jqyr#m~|a6t2$|+GHS7.v}K-01(9n^f(2{o||X-4[_#6/PZMc_2');
define('AUTH_SALT',        '^|>F*Z;dZ8~9&.-pFdTz~Gr>q}H63M%w4Ds_xab(+|QtDF<_10kcxL:-tLn5jobb');
define('SECURE_AUTH_SALT', 'w,K}L5e/8e^UtlG_iC-XBiE?1Em;PQN~pSQ#A(x);<H}~SnC0n|z[ d:h+`?qq9b');
define('LOGGED_IN_SALT',   'lG&ChG/{|~)VN:Xu[!WM;Bjp0A7B!+|}F5oODLmF+wyzXI]{MCm;WI5oy/kIIAZI');
define('NONCE_SALT',       'yy/E+qHRpgcwGH|,w{cWAH3EQZ-H*P.|9{*qN(|-L4AKzW$*kNO;5B,--)g:Lb(D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
