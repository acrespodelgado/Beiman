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
define( 'DB_NAME', 'dbs5698700' );

/** Database username */
define( 'DB_USER', 'dbu1097704' );

/** Database password */
define( 'DB_PASSWORD', '60VFCYurbSTZZm7H' );

/** Database hostname */
define( 'DB_HOST', 'db5006902012.hosting-data.io' );

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
define( 'AUTH_KEY',         '=3wrM$bLQSc=b:;~kA*5_%ltW+rrrB4 :5SEk=@b9kyh>C?$F{{WPenj^tG2rb8%' );
define( 'SECURE_AUTH_KEY',  'tO V7U]VB8Uh(FB!w,5(uP$k<lZNRevZ:1`zI`35-6jp2D`.[Ptr+&R<t2mbw$3(' );
define( 'LOGGED_IN_KEY',    'cK(*kit2(w_VZ-ZjGh,CQ-F3jA=!Dk,lj:7Tm]i(*X6<7*xG?U:qyifmTVPn^^c/' );
define( 'NONCE_KEY',        'hew,LtM]J@ ?9i<hO~W]$8]s3)tXSvdcIw:)> kZ:L`mwS<F22t^53`)s)0wi*H.' );
define( 'AUTH_SALT',        'Tul[QqHM+Vv#MN5{&u7-a31-eYw&mqQ~_u}~Q{4Jqz2^>M?2ZlXr0J 7? )y.!*y' );
define( 'SECURE_AUTH_SALT', 'j&::LzuD<EQahCltM/JaGM*FAk0lEWaVQ4/ahq10~pl=bUUzC^blj7E$X6nuy2.S' );
define( 'LOGGED_IN_SALT',   '3Z;{3lAK2Wqu$Uvqf){7([Q<gJ2*ULwI4=9Rl_L.AZSMK{`yWjs!.T*z47u3(iHj' );
define( 'NONCE_SALT',       ')$5fAp*hBb9x3Lhksk=d`(o=AXf3u+Z]!lW8cbIGqi*n}~,;5bUuFf5@HqrJ Zxx' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
