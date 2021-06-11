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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heat-pumps-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i|9LYt|IA5{MZ&)^2)YE 20jD3x*87/-|tW38Z7`H;fhYlk[[RN<qOS<6nIqGDK_' );
define( 'SECURE_AUTH_KEY',  'bg:PV&$|BTQM/ydinXTDMPrFblCRB<eptL#usT(Znn=lwm@5sHYv^R:^hr?Tsx`0' );
define( 'LOGGED_IN_KEY',    'hW$l/V]ghT.3mvi.5$@3Z~2:u6ZNFSEl$PsEZ@zKF8T@ze>YR_wGy#Y[;2(OGCb8' );
define( 'NONCE_KEY',        'L,]Dtv`V}_iU^/0<07;13kQ3#B4H%/`^NYeF/!9In&4kQ|kqjDB^RYKkcQ4;`}RW' );
define( 'AUTH_SALT',        'Yt.5cn}6|I#d)P1X-[3CKr/O47j4CNT, [|#/wB+.wn)>;Igl[F`n14<Nn!(0X[v' );
define( 'SECURE_AUTH_SALT', 'k$ ;b/Im1X5lML#^&F@/vU%@@8Dv[Q< E@O,:?c#!BjRw,P/xC!:rKoeM6Zr6yLH' );
define( 'LOGGED_IN_SALT',   '`H3e;oQvp1aJy-&_yw^@&!Qwtrun5URyrI|gPJ}?hlM+c6`zap5&k]jpAGA/Z*m}' );
define( 'NONCE_SALT',       'cxa2(l l/14assaXVvFLJTPoUkIPe*]H.Q82ZP@1BYEx%!XJb_:IHWRE)k6`ctZ^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
