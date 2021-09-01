<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'site internet projet de groupe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-nj<q/<r-axld6/m~a#TFD!q3ZDz6suY4=he]K4^ivoc X+Y0YFR+(#.J%AyGGay' );
define( 'SECURE_AUTH_KEY',  'xB},V59pfX?4v,6#xA>yB.J>57;(^h:yY,iehuuk4$Fhg2`{kF0N^;h/J dn>lP ' );
define( 'LOGGED_IN_KEY',    '5qqxbe!gROiW,=KE~_c_y~nv}}DTj|QXAu`+k)eaiYwf^?zM1nHITXid}#B0/Pgm' );
define( 'NONCE_KEY',        '>;P>!9%8C4t>:]=wqGVJ| gSCO[>7NbUODQEB.G*s_5Wut]x_rZ=YtYZA3d%s8wr' );
define( 'AUTH_SALT',        '9UiQCAW>5]ro,Iec>]C`VWc||%r0gBp9,kf6L;e<]Mg$v|8;Kiqx]wWD5@xtB*M{' );
define( 'SECURE_AUTH_SALT', 'yhMy9D|>PMUTQn~>_9#q:jlQZHT5BlF^)$:.NNS3%gS0K[t40B<2O72:G~-~OVyc' );
define( 'LOGGED_IN_SALT',   'Q %uV`(!;Hk>vd5::4v`mE+oFd<(?Fp[=yh.&O?S4`XtZTm[{]`=U7^~?WtaH]-3' );
define( 'NONCE_SALT',       '45^vLbI2NZmEK,yMqB}+XPSEhm?X:|ubIyV_fz1*7j3ZPCl )ptqA=tJ++YzWoth' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
