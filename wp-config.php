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
if ($_SERVER['SERVER_NAME'] != 'localhost') {
	define('AUTH_KEY',         '0B5)ON4bOxvpv14/jRb(j10G+0]R*-VFK3KC&G8pS4*vyDZus}c8syb-i|.o/g<|');
	define('SECURE_AUTH_KEY',  '|Jzmbm`|##JVrB;:u<1Os9DtlOrM]ZE|OZKW)xD*=2HUP+-yF@OAlyhEv)xJ--~@');
	define('LOGGED_IN_KEY',    '-ri;ka{AS,dv|Eo|(y,X4%E@iSmTlx5_)h|UXy g_VYLli^bN|VSGU~ZM9]d@`=[');
	define('NONCE_KEY',        'g@|-g=uRH(:C]Z$p:~-6V.eg]r^`sL!|xUNLUb]`k`/7,||#UkO1L1.Z>Ste|cd$');
	define('AUTH_SALT',        'pe6bB/R}1mC+ymv;;lOYD /[Qj+1N!ZRUJ!x>)B=DX0txXrI^hSS:3lqr|kDbkQ1');
	define('SECURE_AUTH_SALT', '6#d;yaN?iUN/q$2QkeCB]SKe:x%kHi)wM0N-nt/sH1I4o$xMl1}^#Mb?|nFE`|R+');
	define('LOGGED_IN_SALT',   'qUl%E!#ic/D1Yzg^W5[+6aOa!*L6$h66iaaK:LT_ hXe L&_Ee54b6+ph[+%,;H/');
	define('NONCE_SALT',       'B!*=cQO{#k_:aBHE=U6lpqUt{Li!#_H42IX2+kjLi(ck(upY]ed2EfV=LPm`G+Hu');
} else {
	define('AUTH_KEY',         '16dkx T5ye)t*g1-3P6U{]Y5/?h&)_B8.8WKHPMIF+e.NB(~TVZy^|O|oi)MWIWP');
	define('SECURE_AUTH_KEY',  'I:+udMRe8S*AIB-/f5xZ%I:q~T8_<Jh?-wy+v]}%??rat:0xm*-2Lbm@O80>i|af');
	define('LOGGED_IN_KEY',    ']+(L(YN~0Y31y|dkk|-Wu` [aT90j;N]TV+S45<-`eWqOJajN]`+!Ga>@&!yT&z?');
	define('NONCE_KEY',        '/w,U||!Kf2k<A}i_70)CU{xKT( -xc+P#N|l`g=W-.tijrF*FW|*<+2Ahcj|a:_L');
	define('AUTH_SALT',        '0hE h|XoOY_s!,~gQ@>ePH<S[cp^M#|-Z)aWJ-znyK-Qorwb9 &R%2Rb/vW8}NyK');
	define('SECURE_AUTH_SALT', '#P+0R=E9kiJf<@`_))/Gj1r3%{|<*bFr/FHHi!KKx9-k,>19f?-k4-p+&enPh{-*');
	define('LOGGED_IN_SALT',   'S~Yd1(3&C=)S#w3TtH6I2-7nBd!V2;O,LMR _S a|N*?DhGj+0AAi*>.LI?~X&[w');
	define('NONCE_SALT',       '4OI?IO.wOmH)g(n4A8?NXvdZu`O5|(GYB 3V#Toz}D>6eJyl3BzceV*,xW?`fx35');
}

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
