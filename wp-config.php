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
define('DB_NAME', 'gimnastikos-centras');

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
define('AUTH_KEY',         'b(tBSZr$K:Dh 3^FewrRRUq|1dy,pW?2U3=dD Dp{ISa,p-:_sL@^.6S33e]?W!5');
define('SECURE_AUTH_KEY',  '?tq#hQxseE%_cC 8=i5UTa<I/t?q=!b5^RT4)Nfo#E,|[L2:{ixWHB=0WI~=ARyT');
define('LOGGED_IN_KEY',    '#jDEa-p<<- K-tp3cpil;WG<:[L,[fW9LPQ^b|r_#Ch^c4ZX[tsj@j++tyV#Nd1}');
define('NONCE_KEY',        'h/$%^Rtafv;(rzVaW7Su<$-SKjAs]^UW|LaQO,C#*W3`A>>N$MaeA6q`A]ss~:}q');
define('AUTH_SALT',        'Cc#_iB))6{H@<2JZ?LK)^j8MFxb*`}xZ*KKa!k(0e98Iel1;}T<#323O!)#T|X~0');
define('SECURE_AUTH_SALT', 'Dz]2LKKq(lC.lGC?e_m27(S|Z74uVeLw#bu(s%dDya:sJSRR)mn ?MnNN2)`HBao');
define('LOGGED_IN_SALT',   '@w:c^*BAVbi2;Xk,eaw&idBw{^O?Qf&%+W}:Y;hX,=iEr3fi(!S./iP>d5=%U~%1');
define('NONCE_SALT',       'jo;G7];.V*tnk}MrulwS%?.7E3ZC2OR3+kaE<01q%`]]@QC#WWaxiP%utfL}C``m');

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
