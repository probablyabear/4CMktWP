<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '4CMktWP');

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
define('AUTH_KEY',         'G;Ism,V4W)jPz7aidNh}=UbwG _TLeZmT2+NkG</nR3}0s`{u`*f<@6/ke-+<*74');
define('SECURE_AUTH_KEY',  '+R[)i]*WH9O75_D3*og[M>dj!0dcQ8$j`]7)+sr%ZP<G+QUlKU Ep%t||{<2R~T+');
define('LOGGED_IN_KEY',    ':wKVntdU#S({FS0,h(5m2c>Ky7sSXj?J ZNq<d~0~$B)P(o.V;^G5tbs&s=)oLVF');
define('NONCE_KEY',        '&mKR]}d,R(/G!q-]0hl2I<4T*aSYZC)hvI/J}O[X-[E6W80P@@|.k~a-p&k-pUa ');
define('AUTH_SALT',        'Zc:5!}jf%;f{:GHE4]5w$609D5j d5B}E|<4 :3aBFmAikh%vt5fCme-)x5||&s}');
define('SECURE_AUTH_SALT', 'e||n|$f=L3sq->9u/w7D^~qjUvfwKH9x!|IjJND7XfKi<ceKK[sa!i)9()e+)nr7');
define('LOGGED_IN_SALT',   '7(~S/B|zg5_ed%bfTso$: V|G`vu0`7IcG1d2q/:Ee1n|i{~do+8|l-r]dW<<Vsf');
define('NONCE_SALT',       '&*1K@6_R-a(UR.+[jF?;f]+GT)yh{/1kS/uz+VA}{#Eg?wm80fLX$V%9^Vdd&?~M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
