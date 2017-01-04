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
define('DB_NAME', 'TakeTwo');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}DRs>do)dPEf=@N2H6l{0Q2zPYoezUDEJB9~?RNWZQ aq/^4l8uGXEh68&Qc7s?C');
define('SECURE_AUTH_KEY',  '(*s/Ce&*W7JdYy`!{l[*v,C:Fy~7<$Ku}$mZE@r93jd$]^+^5l/i{{Q*n)7kz|^?');
define('LOGGED_IN_KEY',    'm;S/Rj*l@X$LLZXle`d^^sT_ 20udn/xa$3Z/`V%!DIY}/(1$LHxXj.F=EI:6E#v');
define('NONCE_KEY',        'g$QPzQlSc#7cC&;S3/C,]Sj--_f_Ywdv?pa`vB}l7I}cx@3u).kS~g;;C(tIyj}>');
define('AUTH_SALT',        ' X|k8jLi@=hurxr=FSDS=/Pa7M8j-Qd dXLm(!*%3>K1wUmB~ICi&E.Ba[e$mTXR');
define('SECURE_AUTH_SALT', 'vz=/D^.{t`5uMz]YEZUFz6 UerqdwI-}.-Z;$i_.(TE|1KS1?%L%cg2Gj0X!3>I=');
define('LOGGED_IN_SALT',   'pQ}GCK&z*Nol9EcFn4J[s+,SOz).eR3Khj}R{$-qSOP$_Xb1Q !n_;OaxXuzk!GG');
define('NONCE_SALT',       ';Is-O]xT-TD`3!pye~phyg5D~%Y-q=xQOn>Ah$KB@oa*mYPpiB<9aRpgZx28:mG-');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
