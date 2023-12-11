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
define( 'DB_NAME', 'merrybeeslayout-1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'bEes1234!' );

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
define( 'AUTH_KEY',         'U.P[5r3a1r*6(xs2b}erAGRXbMh7t+v%d<>a`VveBjYFBH2?7VP7}(|{B*|6dIgb' );
define( 'SECURE_AUTH_KEY',  '$a2qDcs]Ejn^R}nlOyOo*rzdWal&q62H sW8!W`{U.<S?`Jl-{coL#UN<~(jR&{I' );
define( 'LOGGED_IN_KEY',    '|7e(Zd|araWkt={*.J,-CEz>VZeB|-}7y16z=Vy-*H_@-R5$pOtf53w_J56heYe!' );
define( 'NONCE_KEY',        'qX,-Se,M^uG)&Cf`$3CIB-LP<wUd;?X0%T`~}4&s&V~FAY=IS5X*S|kt{ZvGD*X`' );
define( 'AUTH_SALT',        'sKAG|Ey;JkH9[ j%P+WoKL4>40;0uW)@37)giYk=*&Oo~ _S{##OM)P0R3X++wWd' );
define( 'SECURE_AUTH_SALT', ',Pl0f~+IWpYhS9gbT|}cvdl^#5NfonN+*J$%_*dU1wGi~QEr|PDe$|Nek@WahE{D' );
define( 'LOGGED_IN_SALT',   '=K^3)eC{{C]|n|.:_aDoq{f-t5(cX86<a2LcEW(~A6}Kmv(;hFd`E#W*ODND5y(t' );
define( 'NONCE_SALT',       '|Ysb|.HzJ!/*cJ_qM!+dqjJ1nWlO(TM;?Wu]o:D>U~f1Cczfa9E$N+8X{WaZbGaa' );

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
