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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'ln&J8toriE`Yq>PW|{0W;TUa1c.ucq<5r%oU;y&_WU0NVmcRUn-=aT#/3A+[e7^f' );
define( 'SECURE_AUTH_KEY',   'V/oF-#GD9Vn6(>eszLNI!#N{9eixS?meUPAW*5GIlfxkGfKR;Im#bWBXw975vfKu' );
define( 'LOGGED_IN_KEY',     'x$B)/d$mStkH5_gO]tF/Y+C;H@zI>XcFsEbJ:^sb:jywaV2O|aUpMAwu`,ivnA0|' );
define( 'NONCE_KEY',         'wV|>FaH(:gF)`~FmEV_>U$c6#(r{_oe!{M_/7(B{IRTWale~-j=2n6>PabO|:7lB' );
define( 'AUTH_SALT',         'F-e[>GYTb-qG:>ADt8swvmuBw9$M}/m Y][*XhX~^C01.zml0hX3(+b5^8$o.il8' );
define( 'SECURE_AUTH_SALT',  'uP0mjHQ5_IFz}{9Ass#of3}a(1V|6}e@TFbD`fSv|Vh;g-jcjYwtpGhjb@!q5P+F' );
define( 'LOGGED_IN_SALT',    '8`.c^q-3hmA;VqLF[qg:nfFk?/_nYPzduj(~n<<y%6voG]of{?V8LM65xS{Z-2V^' );
define( 'NONCE_SALT',        'FdW_v{-4R>=*VqCfVWydx.sahtEm8@/fykHFjLbLJvArPdYC&}5kv#d;Vc$GpyEB' );
define( 'WP_CACHE_KEY_SALT', 'Cyx+.Bk(.U_Sa@4g5pa0jxQtAH~H_6l(gWT9k;G}@vvtK)~0zbN;P0FZ[}#5#f)L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
