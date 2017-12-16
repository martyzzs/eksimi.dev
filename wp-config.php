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
define('DB_NAME', 'eksimidb');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'eksimi');

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
define('AUTH_KEY',         'GZ#l6eG4o1n3a?E$,@d>I$f~OF/pWEl{FSNMb8eQB+J;,/z{/ hW>*I}87*F9M,[');
define('SECURE_AUTH_KEY',  'F_f9z16-{Z] #ZF6Y%~l2sm8;@zP i:(!?&Bxv-<v?wBU-TxYBo;BgU0Wp]0J?| ');
define('LOGGED_IN_KEY',    '15#VT|D{c$#g]s7r!/]tgw#4UviLp.r9MlRi(y|:X7N]E}xg/%XCKz[Q~ILzV7xh');
define('NONCE_KEY',        '+A@<VD[n#O9=IY4jKohXcRu7TEknQ=H&fyQR.sj!_69B7bH*08wk`Kc-JO=)sD;P');
define('AUTH_SALT',        'wO]sszt~a*|{@:{N,Cb[RzQ~=Yg+(9YY@xfDhTvJ1 F9ioo<a_mTcSvC6 :bPG>T');
define('SECURE_AUTH_SALT', '0*To>A<O!9~cMW%Ni,V{B-0^jJ#n !uzzjT[wXQ_@n1gtd~BD$i,qUDX4c18@Teh');
define('LOGGED_IN_SALT',   'rmtHGZO}<pCpVHlY%tx6?.gUye|kC-y3Z?!D@hN{o5{|(_q/ce__}>lRX-dXbLv,');
define('NONCE_SALT',       'J{e]w^rKS:E/)6k9W&(UM.o}CSZ7BmH[,wyY/$_-4UtE?&.n)3FpqzY[9!FQf4zt');

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
