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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'solberg' );

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
define( 'AUTH_KEY',         'UfYA_?G [P,x`|~PZ6`vRH%*hnK5Y`sh=&cJovt)#xW#z%{|-fu+ (*XE(rJiSXI' );
define( 'SECURE_AUTH_KEY',  'agr8>T@wuCQ)4Qp9781O/|gKdvI[C$x+X_8>hX]NPh}K<u6l-t3QE(QG=YYHa$t$' );
define( 'LOGGED_IN_KEY',    'R!M6M- Z1{JgW}^j<=5-o82p-]b&4k<S%I#_~!BnM05#5`Y|ZepIKtGyqP=u5%0#' );
define( 'NONCE_KEY',        '^#R4WBh$&t{zW-N.yUb+U]?7SFXC.Lbh@f!Tu<TMD0;C70{(Li??|-l6*.,[7)14' );
define( 'AUTH_SALT',        '`{/`W!oCz-s@l(L[p[7BM/_g[x%<$tm|*3Y4S$)Fg>brY3b$Nz0%^0Ez-,YeA =4' );
define( 'SECURE_AUTH_SALT', 'xOB`#OK@`w6:2uw0Wci5z=fa,Qh()Nd#u5@6yzQN.C,vf(NWi-^&vTc^cG1tqc!j' );
define( 'LOGGED_IN_SALT',   '?d$,L }ZuLe)~-Px%_]oD}Z8x++t Q)hb#5D__(naAI$$%Qvz-Zmn}>J*-M(tHA4' );
define( 'NONCE_SALT',       '-hPfAm!P%fGrH>_,R}>?3$-n9g&JVFkx{UO|=e<gN7JT ,JP6NS{3Sv,z}@;PD2T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sb_';

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
