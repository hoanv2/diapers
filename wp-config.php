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
define('DB_NAME', 'diapers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '_(Dpe5k9#BYf6r.1mL=iNwiiemy=7u&Ec]yQZs~w5Gz?0A:w.D/}O&V*^3$/TaWu');
define('SECURE_AUTH_KEY',  '}Gcby$B0Jq~bd_{oE}LX(:$:FJiarKip-U_MeDD;Yw!}q?`gCMUhI :hG*8oO1Po');
define('LOGGED_IN_KEY',    'X.AQQdK^ha6)^DVq* 8O7dL;|Y1;T4i{yLQ+=-Mf,#*fjZL Nd={5[(s+>5I4nz}');
define('NONCE_KEY',        'DbS|p0w[,{/t,7hK#JBm *usd0q #jQtM@K+y9F>atIB?ep5NY&]f|`>q.d1,eP*');
define('AUTH_SALT',        '[Q&U]8)Lh=SF|k+!WuG)M #4+Ct~j=3[4rY2cPZ4F*;}u}.B]C,(:*[or:+R/-M6');
define('SECURE_AUTH_SALT', '.W`{|L>cdY3~fk)J<<rnsd2/TX3TKT+d8aT/8wxKtPYe:H&@C.khcT;xm9u[k#&:');
define('LOGGED_IN_SALT',   'EcxzjpN0_P>7c;3L:by^y^DU>Y!5>Y{9MJ3yw1[BHC%63{Xas_Z:=8|<Dc6,G#iP');
define('NONCE_SALT',       'e~iQr#PG`f5 xYc;@XYL27<L5#%l]]P]rFj7iSY.|CckwAmEgL/*c]9&E,bd?eL*');

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
