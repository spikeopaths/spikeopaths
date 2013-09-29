<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

if ($_SERVER['SERVER_NAME'] == 'localhost') {
	define('DB_NAME', 'spikeopaths');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'jamesredwards_sp');
	define('DB_USER', 'jamesredwards_sp');
	define('DB_PASSWORD', 'Sp1keopath5');
	define('DB_HOST', 'jamesredwards.dns-systems.net');
};

define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '5[[dRpGx;6LO~BC7+}5n>zysJ@~KDX-S?r1lZv4|=$M*`Q$+n~=iM!;X2ej[xuz,');
define('SECURE_AUTH_KEY',  'rf(mzv6f_(hF~|vy2j,y?Cc!4ZkE-22+B</P7)WIZ<kD-cm,>M`V`A+Ny6%z(XZL');
define('LOGGED_IN_KEY',    '4X9v1-tz8(Kce1/ErX@mzo6<pPG^?}>9)s%8=Hv>p|M$g/1h NQBoH%VgIZpzo:4');
define('NONCE_KEY',        '/Hyl:mWaJ|0B5|U4IR>Mhro;I3U(gg4^[+juxR,OSTDjAV@|fI]^3080v?aw8k>W');
define('AUTH_SALT',        'OJr~-<5rsy^U&LfW4uie(Dm-|w;.#D<le)@|utUuFU3qL*!+3Y:Xu~valr^OaI1/');
define('SECURE_AUTH_SALT', 'Q |/!RcP3!zjQBv,oTZ%]U8iB&u-JKI3eRA@U]g0hq,H1_W#g|Lj^kdyW[;/aMQm');
define('LOGGED_IN_SALT',   '1hH5=!!^+g`b=]`GO^Ak:c-@rVzA3nvh4>(UP8YvC+Obl7Bkqf&8+fDqNj?g.OD ');
define('NONCE_SALT',       'ld3w0Ha0+~(mu^d0BIYy`{J{pK`jb<=yAO^on>[KU~CL[V.s033d3so..VEjL=RZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
