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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'click_admin');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|$/plihA_Ym+,Tqc1Xs7@5~|@`|iKzqr8C|[b :Rs4`g+*+)j1,!oDY[nt,jxe!T');
define('SECURE_AUTH_KEY',  'j_d;-Ue;oI07]WJK:X(4C/qR YA;X;2f]o__+p-G:{X(K+p@&`i8mwaBbZMgLV^H');
define('LOGGED_IN_KEY',    '-Akow+[toK`l1,6t:sitiegeZ{k;1DEyJHee>/)`^.`l8Vy`uxEt(aHf^wo?9C[a');
define('NONCE_KEY',        '{|h{9n|`+cCI/qnfjBTCr).nf^gVp 6p58uKfN+IcIVB 1nT.M-:Njs`Kn|W)(P{');
define('AUTH_SALT',        '|$TlZdJ?y7fISxZ35Zf@@cbHgH 4%Xlpa*aQ( 92qe8+JkB1Y-1^9R3PJlf7krMZ');
define('SECURE_AUTH_SALT', '-AyAwxaaY|$-g-!,n^?Z^aVy)O<^]5hPA&(miQ-FS@3=ECE(,zO+a|*5Es Y~7]!');
define('LOGGED_IN_SALT',   '1:nvie1([&[?`0%WTzMI]j[qh )Fw&`(+z;;4:N#/FmL {Fjt}/16$N,f~lNbEVW');
define('NONCE_SALT',       'yaMhObDKo|yt[#a7+:-Et2(i,k(i@#s=;,Yn[3S!r!D083|fiVd7X=OGn>f6c*Ds');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
