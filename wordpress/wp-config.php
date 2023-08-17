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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'groupess' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'YPyHGLLf+z>UNe6}YtOZT:zJc/Z1SRXFGU &e!eD[1J1M#R2;jB|{6`fO2D-O+H/' );
define( 'SECURE_AUTH_KEY',  ';75xP9KC!p`F4P{S0ULxxJ(!iQ<!k2Bl>bbM_M+|#@dz3`{QCVt*uUtY{H*;I1<r' );
define( 'LOGGED_IN_KEY',    '5N_JiqQ,A_F[cr}C5Qe:,26Z;>EX3,q!z*j~z.`fO{(H/d=)_2-`yF9b$fy! lMM' );
define( 'NONCE_KEY',        'h3=}=4]ss4*FMtWd-k,2Q~sqg|<`8-l4Ep`/=J%yKAjr8~gx3-0FINAkki9{;W04' );
define( 'AUTH_SALT',        'E&,{wPhy`QI7G6-q*k6tm@yJooMVznKs(jmwO3@<@>UzvV8qmCOIzjF<7OWNG$a{' );
define( 'SECURE_AUTH_SALT', 'ARiA/cYVUbwlRqfcM<pEdz#WYFGy<6%:lkaE:b>3Q@{G&Mox:o ,&Ao@9`M4bEp0' );
define( 'LOGGED_IN_SALT',   '^A@&k,-&M9`-Y~(miVU>tui10p)F5cdXy`x@Br~1+*mSVMn7C!z~)uig6em4e2y}' );
define( 'NONCE_SALT',       ':_6I4`wfK9tuL=-(v P*g|Pp?{(x9C]Y+@*OKL6Hx*|sb96GGF2~Y{d)lmgJ`xi=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
