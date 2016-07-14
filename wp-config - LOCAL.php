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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '+* ^@<Xi.HOeLpR$10D,J@&R]Op_Fo!JGR`Ze1vU`T5`-}EQIg]!j wLNR^u2i $');
define('SECURE_AUTH_KEY',  'Bq6@-KSK}ga)ra2Wd-.St];}2=uuI~+*Bz<t9$)L04we@#Gm%y|+u1]{xK};c%@j');
define('LOGGED_IN_KEY',    'Uc;S.,E ~Y<pKWi9X@^GxH&7nmk#XK2<CwsdW67M2)(pOLNWO1Rn9-aQ[79X6m8s');
define('NONCE_KEY',        '#MYiVTTDg|;AMD#.bg@4w(pI0q?g::00>/TkjPO$DEk/SM^@hmSF#!Frd);E4czP');
define('AUTH_SALT',        '43vV$OBI5KTHsU$#Jyedw/t7=~M#0QQ6GG]r=i9o7-@w_4ZDQ}1#iXcX+!lz@at0');
define('SECURE_AUTH_SALT', '4RU+4ZC,^x_:O$A{ui9ic&iw]I|&E1VJ&ve7pL`P[bH8.?wteg!yo;x6b21 W-))');
define('LOGGED_IN_SALT',   ';B&g:#A$eK=sDh*t@Z^UF%5~$5uV~[c-I0Qr#)D46eIMx$>rHmJakXp7ttNo/I}*');
define('NONCE_SALT',       'YPMGYZX,:w MGrtLi`xf_XC%vZDSh#6u2QAk`OyvkvQq?adPaCjC>><kO)t[oW:e');

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
