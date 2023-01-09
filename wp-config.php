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
define( 'DB_NAME', 'hdb' );

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
define( 'AUTH_KEY',         'F]eD<,5ju3e.p/=>U@HwxsG{DXqGNK6-_ykc;g-bJOi0wU,X*|5y1djtHjn@aKOH' );
define( 'SECURE_AUTH_KEY',  'Vq_QvaHX%(7!k}DI?[oxMDKmGKwhxylWps6y H)&x bPtnsS7tA5b=pe198 C/`F' );
define( 'LOGGED_IN_KEY',    '+_uk-pLgZT%)=LbP+w8um*fx>6.J[{zq^qMyvH`l[iP9rj}ogg~wUM;&a-y-St<9' );
define( 'NONCE_KEY',        '(>a!s&!V?XB-Qb%zfn+W`TW#eKNSG*]Bub$Crzgzb5K^y|Kx`Zd>04S]0Qy|*o6Y' );
define( 'AUTH_SALT',        '^srG@LT{b,B#d,>u} SnZiArD>j1o;zj^)#JazoT vNh3+Z^ ;e*gi5XGBA#IC7<' );
define( 'SECURE_AUTH_SALT', '7>6{Go{6A$4y-o_h8s9}s/hQk<+-Q9.v(-:UZ:(Uv|D$SYyleqO:g>WJ_QA,<wZ(' );
define( 'LOGGED_IN_SALT',   'T?qt]jXOQ@=TO6h))uDUK,^X&+.QNerm0m,U3vx#.O=sQ!c>h{,3*?~E2XB?6]>H' );
define( 'NONCE_SALT',       '3|[ClLK6a4xVOMo/l8Uos;yf&ietKyLZ/H/%.=r<g)[fO=UHLrkju|qE&(r8$r_E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aofra_';

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
