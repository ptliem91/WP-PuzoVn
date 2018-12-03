<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'puzovn_phukien');

/** MySQL database username */
define('DB_USER', 'puzovn_phukieno');

/** MySQL database password */
define('DB_PASSWORD', 'Puz@2805');

/** MySQL hostname */
define('DB_HOST', '108.178.53.250');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'KCl[#|7TWD 9<rac2~;SP6|q-f]2B?FyTzYq;WZOz(/LQ,Z>6T<`E*/tHucocKu1');
define('SECURE_AUTH_KEY',  'hHGLwF4Q?9b>k8;Wm<H[f0C^Mrlc]H3pv{55/BTPcU3VzJ=M~Y_[O@~[jbt_!hTd');
define('LOGGED_IN_KEY',    'E|I9;po|)Q>LAT|k[|l^ePrTdUpJH*hD.tS[v*#b2DlOX!G-rlvE%<WX3^7Dcdsl');
define('NONCE_KEY',        'TJyvj}fF@F$}@^T6@S!ly15Af}NFN<nldC:Q;A5SZi&cBE3qC4[kv8pGgV.@1]vR');
define('AUTH_SALT',        'kE_$s~{RIM)^=A~fec3=Bu8jPWFp*vQgJ[c8g*Uxk[#A%?vJYGzkvn+5 tYvlecg');
define('SECURE_AUTH_SALT', 'Jq$GJ|>f9`5z~fUF%1x>828@k^d?5B2O1M%r.kxqCxh-4*Rj:nw;.Zvgh2J|~p2]');
define('LOGGED_IN_SALT',   '[R1WEBJ3@tU@H.J9f@JUHM/iGNt(UH8DU7TY`3h34)YFyX33k&g/Ultyt?T,ZdZ?');
define('NONCE_SALT',       't<P*/t{--5@9hMO!&~!hlSI^>3ag9L@RU`,~d3UM%?ulg7b-[Wwg- c{1G!8|H+B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wps_';

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
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
