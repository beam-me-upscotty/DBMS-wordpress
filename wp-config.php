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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b+P{sx[xQFuXBavZ-Z&:*h&=#z~fZ~UgJ8?uj>q#Hp&!2sE>=TUw*+-OF^qHcHG)');
define('SECURE_AUTH_KEY',  '2Cu4:Yafla+v)tRCIil2!(Iy+t)gNPIz!%/pz^R#2ldaf>.R{.MR+@]yKY:`H*F-');
define('LOGGED_IN_KEY',    '`/r:eKp+bOO`7_#B1;aK,XXS3_[7%hS;CPbUa5@J[UBXfJtDAJ9eo(b*#b5<fv:<');
define('NONCE_KEY',        '+{zX7E-l=QmrcPEw#UYcCWWV})Kt0|uB/`?!,!/M;LZqwfCBPhyEA/fILsf6JD~S');
define('AUTH_SALT',        '#rvLPAAIF/&$_a3!Nh#RE<~ID=VKQ-&YaT9nC&/F!0 0h,rdB^T3UAHBN2Blz7EN');
define('SECURE_AUTH_SALT', '>$%ovPI<#hK%OE5su`*FkN!^*|fTGo^fOq^={4_R^igX%Em%CK]ed&w1ai5q,,?c');
define('LOGGED_IN_SALT',   'lSq%Yg9l7]MSMt;POEpO:Hz2RoXIm:|1%jj2Z9]b(U7)ZiLADGhjyApv/lwp-wdW');
define('NONCE_SALT',       '-xJ*xp1:gjUAwllJS{YOt-cv$/5=KEm>.qWxyX~2EKlyWULR![,Z[1izl=YYhOYw');

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

