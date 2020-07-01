<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mactavi1_interac' );
/** MySQL database username */
define( 'DB_USER', 'mactavi1_interac' );
/** MySQL database password */
define( 'DB_PASSWORD', '7^vlj#rBxQUW' );
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
define( 'AUTH_KEY',         '}~D=I@``Dc.2`o1mxIMT)+_z&qdREp?%z+s:^T&.O}+sDJ!vd/OS%(PK0yK_%Xka' );
define( 'SECURE_AUTH_KEY',  'qS2&VbBn9C_JI1f@5$0#Dir8T@Yc uD=*5!Wg4o~^#(p5Rk,a^JdGNO=M, &UZM@' );
define( 'LOGGED_IN_KEY',    'ZgRY)i(Crl,K24!_cM.D7<G=Ui0%EQ`L2xf}1~`}#%o8cAse?XW`9H LRB)^<wsw' );
define( 'NONCE_KEY',        'K9?FAim9s?tATTG?;2e|j<,w=C88CP5c2!!uz!]23yYKonOn{)rF9OAzo.UkqHX=' );
define( 'AUTH_SALT',        'a7,K.&=edI :[4#KYE<5BAD{JR(hb{b]D5Z~TEvqy:fcxjK:X;8Ax,a01FfNPO<F' );
define( 'SECURE_AUTH_SALT', 'k1q6x*!}}~FO*C{Wyi4D$PjML-34%[5{rm7+8Qw(kk?LRX8j0?e6G^u)>fI3kc}x' );
define( 'LOGGED_IN_SALT',   '&r^+c)U3r2:MiqcW1!&j]D+t;q,bwgAMieM#}_]dQg=w}&9RsC5^~RGiRA6|`]4]' );
define( 'NONCE_SALT',       '?1Vn#s:m YJpbAg+!p<%}0gaiAn45X~vc{PDV^r9l1eh:Y_Ai% }hDdBEGb6ykGx' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr0_';
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';