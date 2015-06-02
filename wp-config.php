<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'glassislifedb');

/** MySQL database username */
define('DB_USER', 'matakucoklat');

/** MySQL database password */
define('DB_PASSWORD', 'm4t4kuc0kl4t');

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
define('AUTH_KEY',         '&PQ!06;r9hhG,oen:2@zJ<UE6qXsS(/[[KWfqSuJRER0$V$B5}(3MTz#u=tsB$wV');
define('SECURE_AUTH_KEY',  'A/72RI;w2-6Dp^vl:{1)kzr .bdb3ft6/G3}AulR4c([(-i`T{JRU0+EdK-qaDJ4');
define('LOGGED_IN_KEY',    'nj2{q_@A=zTDykjChTBuA06o2w(Or>0/L^!Z!2/Bs+#vT@zfNsxu8ZK-dun&/SGM');
define('NONCE_KEY',        'hIMiDh|sGdk[AL+c]j`w-Vs,#,q+ +Ozm %`kB;+Ne$Lpg=2=OPa,t<asTAXl&zr');
define('AUTH_SALT',        '#|/_Ta}q%v!H.hxf,_=++ERMs<U{!z0M5f|V&<1O},Yg@r,N{Qg~&Ts![Duqb1$_');
define('SECURE_AUTH_SALT', 'zT7XTS EnuHk,B2 -|q.UGG8-.m|2`b,PcsgJDd|aenU!|iK]YPARsr:<~b%eX!&');
define('LOGGED_IN_SALT',   'cSH{=8eu@DG%?_+W%D:Xd(,/BI9+K5.+}.z0{7oEq&oE-wsir.={5n(!~}^cYt[M');
define('NONCE_SALT',       '94]wUpLYMPHQ|pIa402H2yXd27H[{<Dk&!*gaFCsv):<V- 1r=G@HzDk2R[gfQx`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gil_';

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
