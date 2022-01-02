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
define( 'DB_NAME', 'pisj8776_wp_pisbagia' );

/** MySQL database username */
define( 'DB_USER', 'pisj8776' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'N~[TFIEx6,3xX}-TWn5091ahTO?60tQD<wT2i8ZJWy4IP3c?8OsxDJhHKx<t,{;?' );
define( 'SECURE_AUTH_KEY',  'PJB_1Xikw|29=.QzeI6~(:*s7*GG_W~yHb]xHv=P8]h~oTciVGy}Y>}VGUq:dK|<' );
define( 'LOGGED_IN_KEY',    'WDc|2|L5?=Jx~W,$JFgg+/~Rcg x5:)J`oM%jBUW^aU_dqcMI7q5GZ*hLZyR~E-p' );
define( 'NONCE_KEY',        '}xCIU!o2H0Ps!51RoYSW5W}W0{6U7|1v*4_Q+XJ]#bqTNWIbtiD?91{ve#cEXoP]' );
define( 'AUTH_SALT',        '5{@oH|c[lUE>LepK+b9H|448PFPd/e|RM%;Gl0w6ftImA42$0LFb~ [9RmG&pdh^' );
define( 'SECURE_AUTH_SALT', '=7B!c5GTA}hk7!4kL{e$`z>^a@HUO#j*JISt,tY!G@$X<m(|H5p>`BXwxxc-cfET' );
define( 'LOGGED_IN_SALT',   'b<iY6sieLw?H[_WLjAc)4u(:Te)72J(;h Q#ch_Ae+el1-/NPx?:1{D68}TKS5|3' );
define( 'NONCE_SALT',       'x:fp8{{Og(Uo{fmm!?eISz!)q|{ZAII_HXC&aR9}S#evA;cjpJ.K8/Bk?7nA]@dW' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
