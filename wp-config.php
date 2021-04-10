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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projectideas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';A7RU@~3B|/8;Vi&nZ$EC>R/n?<3.~iq*I+OC?SD*di[t/Z/E1R:4=fe738<D+M}' );
define( 'SECURE_AUTH_KEY',  'u|f^}+8QfQ;nSUs/l/mkotEak&B:x5)`x./k%y[.3pxl+qf{p4@:+y5<CPIuGB3Z' );
define( 'LOGGED_IN_KEY',    'e>>u(KhaoQ.U}F.4-3 ~ZS/%D)4Y>yl96T6vg>9MLT3&%|wh0MKEgX;V@+dy`,|^' );
define( 'NONCE_KEY',        'W2JXK{evNPv$%$]EmY|t;*)b_azbW5M.85nkPo@Y`l1MFj:Zo8O+5wzU9*:ZYtlm' );
define( 'AUTH_SALT',        'jD5qIO>]]Ye`)nodH48w2<Lu;=q1GeCV6~tHW1&6@[>gKd0!keY/:(;JVQg;$xA;' );
define( 'SECURE_AUTH_SALT', 'o72_6D+]{mrG^:>%MZR%OzKAY%)-ow:9AZ;6u$>qGdYd6$3)]@a=`5Xxh[,Gc4c^' );
define( 'LOGGED_IN_SALT',   'p1C;qjwQ]a(A3.o)P s07.O~IDLD::~}}ar2SD|^VLhS$s<HsPB1N&/fBbnc`}u=' );
define( 'NONCE_SALT',       '5GZnn?8z}}sm4x$SnD=>fh_UQ^Patd6DX5ri7Io`+-*j(gl-gSBNr4iC?uWE7,l[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '7pl9Gj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
