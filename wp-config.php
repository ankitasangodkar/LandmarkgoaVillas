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
define( 'DB_NAME', 'landmarkgoavillas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ajency#123' );

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
define( 'AUTH_KEY',         'gqs2/]Uqwu3uav@F!ghW:ATezVpbGBPh(@pCh5)h$ ,O#W@]ra.a)iQE$M&iPz7 ' );
define( 'SECURE_AUTH_KEY',  'aEfa~#-TShX:nrjpdw1RP+leldF}:WZ&btkNFU<KPJ~@5tmYv13$g#<=ZDP9uXxa' );
define( 'LOGGED_IN_KEY',    's8H3y !5ZA`bB:ZSkKN+D1tKiY?Y)KKO8TMWc9{[qiJe0>{Zz++[22/c`3qI[dP%' );
define( 'NONCE_KEY',        '@J+{!P$LK.w$@nO0ZYarfY0w L9+EC6Sm[m/c?o{w7C!N1Xn%DK^/l3Aic{yaS9M' );
define( 'AUTH_SALT',        'XjIZ:S5dw};=CjAcq7K{&Cpq[$!8zZ5T]Ip zt@)L8{9B8]W3Ow@UfKM:P[Ex*/c' );
define( 'SECURE_AUTH_SALT', 'YRd~=%,pa%8 /zrHCJ5E&uisK}~Bp[ag]?D48ePX{_~Kp{!l;Z&:4bD7 0QKJNeB' );
define( 'LOGGED_IN_SALT',   '!f. 5~w`;#znv)*Q=K5),.JDKPCJIHT1G8T[P{cdn?K=g(o.,f$`JT>DNF}t>fsW' );
define( 'NONCE_SALT',       '2I<-h6E[{ITnZ.+Mjh-|p01o:@[NxG$_rkN`N,Q*?UKEW1jnK&Dex9lB+8]x*Smb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
