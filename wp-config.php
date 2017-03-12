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
define('DB_NAME', 'real_dev');

/** MySQL database username */
define('DB_USER', 'real_dev_user');

/** MySQL database password */
define('DB_PASSWORD', '}GgDW9Gfi2n4');

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
define('AUTH_KEY',         '/u9R|~(S26XgGst&H&XRZqGE|TsGPd|{1tpVR5~@dPeZ2tERDQs/%|{Rf/,+KX:_');
define('SECURE_AUTH_KEY',  'I+b& BFRf<~bPJXT#=s%p@Sn))lmQ8wrf=HI8Jqs*:vqTL`A4>!/a]k`2B,0k4*z');
define('LOGGED_IN_KEY',    '}6{UG3lQIeXe;we>%%}*:>IX*j/+TIU- ~{LZ24j1fiJnSw_]g9e%;Qopg^fRXMh');
define('NONCE_KEY',        '|C@E02]o1amw)oK1WFrQFLO1S=|qrsLS#N.E0h22hnjjhjnygm|+&eg``uH{Y<<b');
define('AUTH_SALT',        '&{,Y|$uF,;,7H98X;&A/&kSqn<qa;u:GWOPWDZ#S^&zy_[@(pU7B{AAkZ.!Wv<$ ');
define('SECURE_AUTH_SALT', '#C[(CZ!T99`4eh4ws1Rl3/$.6Bt0~5UB)Ww FDthOsC[pkezMfumhF3.c`9N_Twc');
define('LOGGED_IN_SALT',   'X,=;!6gMu[?E9&I~fsD:mx5D5bK%C7@5B6<7 _HlvUgXDV7|RXqFYcZm{0dVrR@V');
define('NONCE_SALT',       'y`@34.&>J|!U.I:,$hfjF!r}D(L<V+3;X[<m|^gjhvlw HeqJO4%kdJy D-/@1=6');

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
