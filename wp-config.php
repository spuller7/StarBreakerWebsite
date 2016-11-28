<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'starbreakerwebsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4x/,Jjh1kSOpDTJR$mGa}Ul|DuZ;Ep|M?j}rb:l;fXhbP,,g*!>1&3I?<zetoL#u');
define('SECURE_AUTH_KEY',  'at,=<h;THJ;DL|#Lt[3YZIu@U7Hh-Pwu~h5V)>-REx}o-sO=8VIh)Id?x!z$x_X.');
define('LOGGED_IN_KEY',    'YFoK*DQ#~`^8)lG~FOg#eE*rP}_)d!asu*8+KusD--mWeV5-x=. G_n-Ej6n5>nG');
define('NONCE_KEY',        '0;=d7r)u4?]pkx5]]ZJD$E2~9<)y!lNE5Or6;*tC[:km^%kmk<XKrALBN[oEN#Ov');
define('AUTH_SALT',        'uqq%TJ~>.4>gZ1RI#u3#Y+,;R*t@KJ~I.3P1c$evMS1Z+MGxfN4favN)e/jPce!]');
define('SECURE_AUTH_SALT', 'J.F[:TC9Kp-Nl,S*JzD7FKTKtaF;UQO(y>{@iB ,?ZR8PeI+YDIlVf#y$T&!GF)#');
define('LOGGED_IN_SALT',   'dl|0)NmB<DDw=qMpDsx+,A|$c{:U(4q9T6{XQ;E;TW6Ml7)cZ+46sv4cFxh!2<]<');
define('NONCE_SALT',       '+4H8gMZ>TxvF%NIB8[<ynZ4Wjkx[yo0Xd-IT[Us1[mHrWP8;+B+3[D+894-)yqyV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
