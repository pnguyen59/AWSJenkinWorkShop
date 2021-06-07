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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'database-1.cn2gxi4iqaqk.ap-southeast-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'L_d`=clSscEtbV-nUt!S&q=y]/BQY@} #q?xwl~&1hh~ehffCV,DOc`uoXC[-yu!');
define('SECURE_AUTH_KEY',  '$iqp=QHDd]i3UH^w@0FgEZK^CshsZ10#Nw[n 12V* q>+#~o:6w6&KY[mG Rdf,y');
define('LOGGED_IN_KEY',    'w Cq`U!<]g*Z|4O-_%`Yr<n67L|?v,r];ezMq2 UMe9<B|+tPy~1Yjg|lnTo7o}/');
define('NONCE_KEY',        'vSLvU2N+FFg ^,R%5>f$!*v<[23iA`-86XZ%Q1DX./|8zhkiILun/p,4`$-d[>>u');
define('AUTH_SALT',        '4SiC/d_]Mu(a#>Y>[S|CN-f]y8/&3YH .O-gW@Da7JUcUp~L:-]1(WXrdG?VqX},');
define('SECURE_AUTH_SALT', 'S3g}1V6WBsb_FP>+x{gN3+Ko-)%sK#-ntCx|P7x,3kwuNGl+Z+J1?|vua2-[m|d+');
define('LOGGED_IN_SALT',   '}nT40LKPH0j#6W4=9(cypeKWguR%/tZM_Cxp-_%8 GZb0d>T^C]lCSpxGQ<1cm!Q');
define('NONCE_SALT',       ',9XP~d2aw^.{p{n]^2$6so@&}+%e$PSBB_|Mw8B8X!GsEDLD|C-GUjuOBEy{9Jg?');

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
