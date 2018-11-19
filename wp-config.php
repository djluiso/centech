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
define('AUTH_KEY',         'I`IxiYD G(q:1{MSs?]7* $6nkirA!utl0CV{v]:eS]i.1%XE9`GX$l54Se$-^U}');
define('SECURE_AUTH_KEY',  'xnRY3=K9R3(X3#,`Gv.$ OJU)>N$%g}WE&j@Fp^->{z=;FHGjMR+]*hr^(a<QS7?');
define('LOGGED_IN_KEY',    '&{L9j,#a8/>hwU~S>UOp/l&Z[xk}g% XU<_PA+eBOY4tT{Cf2CZ&92K8Dex>cb[G');
define('NONCE_KEY',        '(ejt8i4s?^8AHy*{xr[ZlhfV#O MaZ$@ASubWZ@En/G*[b+)Ra`VAmi)sM(BL>3S');
define('AUTH_SALT',        '*-]_tLjDgA1$(XYHQD /Hj/LOgMxDXo6B$]IG&{X|H|64XiVA.GL^,ETpOuFh{<7');
define('SECURE_AUTH_SALT', 'N5/7v3^Jm9(A6g?09!e^tabB9L3TG:!Grz;>Gem@KN-n7O0yb(SUF#+[#j-@m%(E');
define('LOGGED_IN_SALT',   'P{bfbV{tU$~}c(zkNo?|(GuitV5oI56XN-T!0XHpdy)cMLV;=BcMj:vC;EMYMCfR');
define('NONCE_SALT',       '6LcMt&Lvk&9LbqC|}&eh3h,#-m0W%b8Dl;u6#FH%Z4l~ROP$v/oI=YxA#u|N^NDq');

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

define('WP_ALLOW_REPAIR', true);