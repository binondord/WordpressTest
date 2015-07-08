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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'wordpresstest.cyzzbkmc8kww.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '[[1hMo!WQxSo>?lMZ(sks-#A|8Y?4vRQYgnsl|gm+al,;EUJ4XcnArS-leLw{SNk');
define('SECURE_AUTH_KEY',  '0=uw?-M:y4qG#>KQh<hS.*Lx5OiDF=P:m8W(NMscA0uq[LIa2Se2[]Lx8y/7MqV|');
define('LOGGED_IN_KEY',    't6t!0D-J/rd[n0b]v6Gv-PR=}iPr=x>QOV>V!||q.4Kk~/%~>oBkxlX<6:pbN3[D');
define('NONCE_KEY',        'xNlI-H8j}rf7>~`j+RAn]qBMy?)xNmqXYIy*-+]-Wc;K9R2*.iM|}l`!:okFfF5W');
define('AUTH_SALT',        'QX0*q3$+zx#t3[4dQ[46bkI(HZ??eVdNVwhyxg6W%E+=P8mBj8@SX4c1@*4Y(2O ');
define('SECURE_AUTH_SALT', 'nwy[q6d.?rKl?s%f$GK2BGhs[IKPAihq]8Z>-kNPf]QZeT&X1VpYs?pV#1Hu/nv^');
define('LOGGED_IN_SALT',   'u+McC9t<H6 q0yP%[%-i8-m:0{th1|@}_gnQN!&dMQ+mqV/Wp@e}fluR0k9_p%v}');
define('NONCE_SALT',       'Hb3J3%a<d`f`-%Zmq+:tIRX{imZF]r]O-d1<L+|V!Z/P4VPz$W-(76M@<#s2WKUo');

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
