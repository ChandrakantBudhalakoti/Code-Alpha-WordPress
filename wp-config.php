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
define( 'DB_NAME', 'code-alpha-wordpress_db' );

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
define( 'AUTH_KEY',         'zFpg*mjM:I*9%;ZV6^f}bD&{o+HotO7uOyVt+)^V!{Bk-YegmMT=q8-{RKD:,R75' );
define( 'SECURE_AUTH_KEY',  'W/)jrgN^3B|7Dm#Z,#x|lg(;v6rZfy2IC$TVFNjw9C>nI_zBjeF,e&&R|;BR]REi' );
define( 'LOGGED_IN_KEY',    'Q1oaBy<k4l8&K:42JXL|A~Np&+>6V_,08=t@=>fsq8H[s,Q>;18=-AdTPg]8>>YT' );
define( 'NONCE_KEY',        '@@:+{o1k%j6Q.~s[oHS;!Dajw@!%G2f:R:/G=2|pU`|3*$5S?#a[(Hd!rUaIld3*' );
define( 'AUTH_SALT',        '0w$ke-hG_rVC@L!TZ~t-E?;ZXfsuwu>BCwY{|AH:d6e*.Syt33bdOsg!*!,Hzuka' );
define( 'SECURE_AUTH_SALT', '*Y)0CeD_QDOM]W%&G1Ea?5Q}ry+=kX7a%i$P I@,is,l,&@L6N]d9i!PiN)8XP*d' );
define( 'LOGGED_IN_SALT',   'XH;KvO>#khvGSvOHIv&>+;bcL`ZgSi,Ml`^D^14SB4hWbvo&B(M]/Oj<|lQOQU#A' );
define( 'NONCE_SALT',       'TX]bcw.0~2SPYfA[FdPr,V#EO!rfRI)pqEv!L>sk%o$Q2)ec#wH8{adH%L.}GA0$' );

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
