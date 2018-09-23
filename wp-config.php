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
define('DB_NAME', 'portefolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'jS$sV[@!Jby/b|.qM*N#&V2-,Q~a%+N-/#P,yh=McSR#~`P]4}t#ZZ1TvHV&k8P&');
define('SECURE_AUTH_KEY',  'BO_e,RRU^tc f}!R%gsUk&:2qbK}`[>x0 oQNJ]Q&+-$2]~Vd:0e*D-$R^gDjAgv');
define('LOGGED_IN_KEY',    ' j3dWOhtrz*p(*CsJjXtxDn`G7>JqC >)WeZ4Z^c84f _/(SF8N|BmjCa+I7Z,/.');
define('NONCE_KEY',        '97EF}a@h<;qM%`kLXU5+UA%&`IldJp}c:MKINy}yem|6?ERlG3N-gy4g`QSs@t4#');
define('AUTH_SALT',        'z+I3PeREHle1RIh}O}mS1wYnJcpRuUJbpFSW!l>1zjITSo)G$7oNUcnB%V@`N(^v');
define('SECURE_AUTH_SALT', ']^twzv[t=F%<T*7H25b/{5SDDEr?)uM&Nsw2b`M3sZXC&Tw^90AQs[p=WkiEk9zT');
define('LOGGED_IN_SALT',   '|!%UxU_I9y#NX]Frl`{0l2Z/Qk32nurWYG(U;w+^N0p!Ms@-xl$98cy6R[Y+uN.;');
define('NONCE_SALT',       'yNc#>h1]]]$<!?),u%=/|z,-w!KxUdE_X 3.DUbSkJ?D*,eG&a:#9u|7+5_M&jjR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
