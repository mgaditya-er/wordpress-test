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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q>l` _[Y?s6dpoC`6%rs3[`W*aFw5)ixk`|vRADjc5PNrC4RSzi?e}V8*]?qqF6-' );
define( 'SECURE_AUTH_KEY',  'pradTvP=}N+>@|X3av]GcmmDnKq;Favqp*&9Ym0T@,j1`aI78Y*DgR!s2Awe-E(&' );
define( 'LOGGED_IN_KEY',    '{s{!xKf28e&wm>aK1,iK8<w?n?puIZ6=ls_$1(wSJ8JitntGP<OY5K2mHG,~X!(H' );
define( 'NONCE_KEY',        ']jy[Un@*U&#Q%*oHGv*c6S#4pXDlU=PE=,IzYx7:9@RvR_m% Ap~1C=YJ4!uy>Rj' );
define( 'AUTH_SALT',        'qKDA1kRA9{9!t099l=Fg~?(Nn!;&vSnP}H~b8Re)lG*YX6ieB+((g/9;a#?_%Gm]' );
define( 'SECURE_AUTH_SALT', 'flCFzTi`5{w(w,GS8K:GZ_O1!jxyHb]:NKw_ppm,@tFzGl1Je>ao4X#])L[rpk68' );
define( 'LOGGED_IN_SALT',   'aSa`R=e7*g_%$JlQ?jbNY[A$,Rk(]%kd2q{?H22VJk!4mV5!Z33I@9#>PceO1HF*' );
define( 'NONCE_SALT',       '<&`n[Rn%+EQ5f]E9qztHz>X4w%8C&tZp;8 : a#rK1wrK(zzK)Dns&EUWPnn<%r{' );

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
