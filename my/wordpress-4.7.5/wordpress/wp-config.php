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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ']Az2`EPRsv[beB]6_o$6hzeTNV4~ZlEHwu.=*T0<>VpU!g#^&r%]$D1]eM!O*0M7');
define('SECURE_AUTH_KEY',  '%0)~z|$VvN+rxmtzM}bFk]fgWFRU`u#lwO6=cbF3O[!^Nh.LQS ~0(twMn0C`*e[');
define('LOGGED_IN_KEY',    'ic_h3&:NqM2ylv1yi*}5c%6zD Ha.$v..b/-rPV>mG`X]NKUVdR)O-r![jXDwh>e');
define('NONCE_KEY',        '$nAF-o.L3,|s9$ ?FNKvOU|E=!E=q}lA]*uwa-,2etceiwf(n^m8R(+;`3T./fL-');
define('AUTH_SALT',        'IGIRvkx=~m;f:xT%d|`h6yA6vgsc72m;/F^#8:8&~(8(_F&9O.gj&.|N1&<$sJfi');
define('SECURE_AUTH_SALT', ':|v*RnJ!JB^Ko$/82!vBfRG+G REzVm,C,DJML/DZ+IiN>TpKYcWNq7^u!K9B6LS');
define('LOGGED_IN_SALT',   'Gmbj9oP#f*N/oh:81>II38| YE`p2x9HvYlnRY7Q/a*u}0,$-_@SK]OZ?vZl^{Lw');
define('NONCE_SALT',       '}T[2$* QOc;6C=9$fyIf;`7},$)nCZIvTD5O{%dt^6<wR^N@z rz~os7$V{[eI$i');

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
