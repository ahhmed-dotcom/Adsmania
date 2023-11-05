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
define( 'DB_NAME', 'adsmania' );

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
define( 'AUTH_KEY',         '3YpUl$+)@V?]k!<3$2+X{Svwu},J8% bm ?T!|R@q&>dU!fS|b/2$kBCx8y-|dR+' );
define( 'SECURE_AUTH_KEY',  'LiYdeK/]vE#=%sdtY.pm3NKb4uo{$tr2tur9wzJnq~VXC.AYl!5^$WYXrj|0OsSO' );
define( 'LOGGED_IN_KEY',    'S1$^{*zRkT@qJh>4-pGgeCZ`ClMl&(>n=KsMgVBa9Ce[He7kDiZ.0>W_H;bS*_61' );
define( 'NONCE_KEY',        ')dm^E58O SJ|tY9uu|`XpSsoIVlyW8,clPDZ5,efL{6Xxi!8F^@=^ahh}1p@qmwE' );
define( 'AUTH_SALT',        ',Pw<%m<e62!_|rsGl8ov%>i!Q7N[y{CwYYT}nnq+gbNp)t}h!%V#5~$+N!*y.oFz' );
define( 'SECURE_AUTH_SALT', 'EIy009{pH=tz{.lMUgX@~+%d>lz|T^gMZ7&6x&<W|#<e3Z4^w;ws6* QlKXJ@n31' );
define( 'LOGGED_IN_SALT',   '<7vonyje1vz#ghs+N&R;d$StY wu]U1~#11//zp(ddl?x~k,7hLYpB1bQz@d3gg9' );
define( 'NONCE_SALT',       'VNO|22v!+R|/t~E&@rN;<c0#m>2$)XVgS||b<JdJcgB/sk/om2z@zOiu$kUV4Vn,' );

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
