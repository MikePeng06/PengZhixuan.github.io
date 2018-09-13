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
define('DB_NAME', 'michael');

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
define('AUTH_KEY',         '8H9Vt,7?Qmz=6o]{Wu0(vtHLu5E&Me(D=3:>wkKue~YCl+3!qJe33|(GT+MT8 |z');
define('SECURE_AUTH_KEY',  'TwO~uC)AMBOe4d]SyyP8|TC3qF+|+>%4dSD`Oy`Nh3J^o_~]Cdxf%P+qVLtMQUl[');
define('LOGGED_IN_KEY',    '88mI#bGRx2;=>.{&?8LT,PD(5ru3|?SI$<fKHlZLELaSKzs+&p!/m>XPNZ)wmyls');
define('NONCE_KEY',        'S!OiJP!-H<Lbw{& .X t^^a^^U=&MKyv|`(r_ %$$F,e4zO2|qSmEgGIvi`tHTmZ');
define('AUTH_SALT',        'Z<>qjz{BuB?Cd!~4` It|^iwY$.yzA1|o`BXoath[uYEE?{_4RL)[8%Wyu#1j>cQ');
define('SECURE_AUTH_SALT', ',z{6iW!=3.;K6l/UVsAnQIN}#JfDQReA:/(6[{b|G3t[ HJ[YpWCc`eMtoE$Tvh9');
define('LOGGED_IN_SALT',   '.`TP(+ 94FiH;gQx`vigSSdrMqGl-S[!,AXRT7P.!*ca/$iSz %r29MP!Al-.`E;');
define('NONCE_SALT',       'cq%$KLurW`X/%4#wUn0WA4M}*`FsAN37^i+ol S#sP%&oMiO-H^0vG(f<5mjKb0]');

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
