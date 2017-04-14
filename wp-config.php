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
define('DB_NAME', 'hashtag');

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
define('AUTH_KEY',         '}Lm4~Dzj5|3+TcS]o=Qguv1f~N76n+=Qk$v  /pL.17Lm,_j-!hV},89a_4k4G0l');
define('SECURE_AUTH_KEY',  '&`e.pIOXf*DtJ8mTV#7>$$2^6M3JJSNBJf,Q:&n8#GFrz|zxj^K{=_+(Anf/kxhE');
define('LOGGED_IN_KEY',    '8b1oUey^_!>Zx<qv9@>CVm1MSer#@v8_{u`FYJWO`gafDiEYwLg~ePL(quhUF6Io');
define('NONCE_KEY',        'H(@3:OA4VW/K]XCV|4-:o=8u;|V%sEwbL-t1ax(u//<+gGGrLiol[W__|A/=:/0P');
define('AUTH_SALT',        '#Ez86<{bgpOnpGW.*mih|*]_(TH)5 ntl.Q/9w34BVi6B?N2#IRhw$H~ ^Y%8PBh');
define('SECURE_AUTH_SALT', ') SNEDn9Li4c9-)}TQansZF>7B.({IJ&to(F*i[Lb]>8&cZZS s)ZNsaX&qr90r2');
define('LOGGED_IN_SALT',   '@jCbD,Gs2ER#;oDn0BZEv2^}4:]9Ua|(B|ma$,|Gl8z4Wa+vj0)NH6tjlI,a{}U.');
define('NONCE_SALT',       'HUxc98<B@VdC:]V sg-X.Xkt05W2_`u0VXc5b9{17KCvH4&H/*r:wJjAIL(1FMRY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hashtag_';

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
