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
define('DB_USER', 'CitySlickerRick');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '5Ug:IoK)@D+H]O;%0E/}Z6,3G/]jqq^o5uKDv)P`z~sJ!z#}+Ir1;jng)fU<cC`|');
define('SECURE_AUTH_KEY',  '8/)YwXqX]>{L/PfAZH;8Pq)ChfavF41eS6iKBucu$-MOH5o |W`^P}Zmf!z5izEn');
define('LOGGED_IN_KEY',    'H?g/N:diN/D>IKyR!@UAk.o7z%8.g{=Gy(ZHKXA0h@{TVMTGs?2>q`U-j7`$x&XM');
define('NONCE_KEY',        'F/0QU$c[6)68(6>bs419Qwa`eaSp$9 $Q{$G~[Y]RrY}ED&G&vhN=oPVJ/5uO{@4');
define('AUTH_SALT',        '7qS:p{]O??&@*-ktI@6b+b{Z>JA]z/:sc~tlBD`s<Sa(hvwIbmzKz?[+Oy.HJTv|');
define('SECURE_AUTH_SALT', 'e:6IcsR#YI<gEqSZ*I^#6JW YgtX?C7j,nYEZHE ED@NE?eh#}b3.vg;[rS<CC^g');
define('LOGGED_IN_SALT',   '8wOEy8>gW5/4DGZrj#v^3Tq~E|K=pXg01by:!Nsae#bJ!Fg3%AnA^b nKj>7fuc#');
define('NONCE_SALT',       'Vj;m bT4capHEKhpxU=|txb!H*N?_AJh<p.NcU84:`Yc9CW_ur#~I+kP:qnMg0ZP');

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
