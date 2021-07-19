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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '3OuaHuxPRq/!thGe>t-X+q/uIUSyb}ebXZMue1{crPDWZVR6yb:xG oR.0!JiQgv');
define('SECURE_AUTH_KEY',  'M7+9hii@_(%&!J83J`-Z37Xq`(9Pna0zr`{/&9j($.4D+*Q|U#07Bxav!wK!g|G9');
define('LOGGED_IN_KEY',    '?%@|%+,3+|ol6D9b-/7FYL!nO hi$&^~mdAy+;./79pC+K.&79!}zy^+fnu}eZx(');
define('NONCE_KEY',        '`mU1>v`l~pyV(nkI@EIQNQFDSF#UK^RG _hFob+sD/.p(~dA^2J;jyllD<*&{5zE');
define('AUTH_SALT',        '+%ukpP6PHOK.BU3V_3L1d( RM`fHB%boD=(r^+faT;JmN6t1ru]-Aq*RitaW*5(5');
define('SECURE_AUTH_SALT', '.6Q{/VSYDLA?jti`~+<MISEd)}bVQ. `i k5IyQtr:/1~t;!@pWK< )d6:1_@d&Q');
define('LOGGED_IN_SALT',   '#x2=8jHu[:P~(fY):e)h-~K5<Z%}%ts7swM&eC6~S[2il//azto6b+4}S)L>]+:!');
define('NONCE_SALT',       'kOU=~W }GX`=o|1//g9=nog1KMY:+8&ThB%K)hr|=PvQKd1bwVMx49:yX]zNTu]H');

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
