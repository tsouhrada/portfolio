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
define('DB_NAME', 'tiffany_marie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N7Pf4D08Pm1w.l#DgrA2UC#kLCib%On/AIPu.dl[EP?6p[glf_DYdVRt#Yp#iX0p');
define('SECURE_AUTH_KEY',  'k1(M0.nM$>sxsA*4{@/B(yJkIURH|RJ@Z_6&={p=n>sEHd8i;rtb3oOCR+qb1K*x');
define('LOGGED_IN_KEY',    '/hmPLH6cZ>r0ouUJvX1z|UEgp-($NY>m]!Y*UR`BBu6=6II{3zD,%w%64R~Vwr]P');
define('NONCE_KEY',        '}*qvf9M;Stt#aW=,`M-d_,b!X{9ewFI(4dsME<kJPRBZo<[.74%z>D#sh{PF67k@');
define('AUTH_SALT',        'i^XQ.MMG8,ZDC|pMOq:4t)PfGs`(-hz:I$wo`UJ8O~W#k-#x8 -fO[=^u)7cY[;/');
define('SECURE_AUTH_SALT', 'ygxnIq1P+;3p.>juQUsfXM1F6n%%R_YW<q077xB,vy`_?CGIV7kH-sAEJ?%>F}Ne');
define('LOGGED_IN_SALT',   '8>yl,3WfFuEe;_/LK2E{wbMBPW zRj5uOq&rt2-sI}*&!V.ki|78HLxxV<,HpDgB');
define('NONCE_SALT',       '1L5y>PLNvQU*51Fy]&1Q8NA`EC=tzY{~d{,_]!1mU*/!E{RCvw~STJGu}-e!y2Dn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
