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
define( 'DB_NAME', 'pan' );

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
define( 'AUTH_KEY',         'e+i^hJ]pUBhYN<KfO. ?0kDLK-7GPX!3qT@0kulJH}5Cf%fgnABF(L-H@+t+;i[7' );
define( 'SECURE_AUTH_KEY',  '/RiW8 2y_KX{)#(JOh5yuwo5yd38YDEzq>G{zeU3^$*(=KREowX~9${JwWLF{i;k' );
define( 'LOGGED_IN_KEY',    '|59a}&aTJL<c,nHw5Qp4l}+4ibql?aZ)rDK+/pDEz|YQ_vq=a8Cu,4OL1B} og6D' );
define( 'NONCE_KEY',        '~l@ZX#X.J^ruilPYbx{MyJX?l%65f{;SG9WpA8DN8n^8;H!q!~A5,qrwur[<6,EE' );
define( 'AUTH_SALT',        'erWo?]*tnP/[aF]bAO]CqB+2^|*6M_8>mUbpmcE@yR38B(Rsz$jpWb8k-n?_Z:Wy' );
define( 'SECURE_AUTH_SALT', '`<3/V.M!3U_@|d~#Ll]&V<^!qe/&GA!1>WLB?}q,Zxg*DtIHwh#k*2XUABW;,5j<' );
define( 'LOGGED_IN_SALT',   'uQX$UFY5:M%yKqXQ}3k?zPaRBLGfF7G58)UQ.F5=J/Kh%QF(B8`&)7__GHQlTR/r' );
define( 'NONCE_SALT',       '|dNrxC]p=a8BH?m)@8~gUX`6>G!Y<7|?_LkjV7gEPGV,?^,$n(IbVGh& T(>EPi[' );

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
