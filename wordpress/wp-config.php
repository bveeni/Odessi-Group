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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'odessigroup' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Z#4N;_p]w$xcIq&+h0+x.aA>I(TDJbujm,#&G6q0)4l^&)3NY.;`-jBEWcf41Tl$' );
define( 'SECURE_AUTH_KEY',  '_WormARe/(k2+6-/5d<<7>h?DbF$w(QerG31?R{9O8/Xbd:^!^?2k@J5varr5f[9' );
define( 'LOGGED_IN_KEY',    'C:hLps]2na/;w(#~nR**AN0&.`$@hlfv)?[BK68MdY6+H0O3&|`-v0iAiY/NqS&f' );
define( 'NONCE_KEY',        ' B>nsGl&? vO0id!;ZjC`BP+]Ue Jiy.`|IG0cI_EUm.AK/8AInsVOI;w3=@_gxt' );
define( 'AUTH_SALT',        'wX$&+CEUHP}Id}NeG;5wk2+<nr>CgvT?5)su?+]BGHF&%(}QC;tNF>02M~k@FnPt' );
define( 'SECURE_AUTH_SALT', '<0`.KBk=k1Og[Qc%zZX(_AUF%<70C8(1?h/IPX+cQ=H6F|<4Q RSe3Ac5J.AjNDP' );
define( 'LOGGED_IN_SALT',   'Bx4Y27F 4ttnk0+X!#g5xNpI7Z:;QnPX@6f)?(>RzvKl)+ucBH!i}(=p3_Ln{-v/' );
define( 'NONCE_SALT',       '!B[o3n4VxYUAA:YJk2*X8$|F>C;[o0/Got:k,d}yB=`jSe7#fcAH+9nYQ>q7gb$~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'VOIT_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
