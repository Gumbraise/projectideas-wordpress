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
define( 'DB_NAME', 'drg' );

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
define( 'AUTH_KEY',         'dZdC_X<JVc@z<d3d;~gj3O`>8jm>/C`FF;jbMp!s%P^7^l;Zn`?6{.D4b{602:TE' );
define( 'SECURE_AUTH_KEY',  '3HA/O}+ 9!{3W|>Isp89BE|bJK)WySjdz[:R3V0:u{6Rrp=Q1_Uh{W1/5sqX?kV6' );
define( 'LOGGED_IN_KEY',    '+@VhE[O=cDp<,stw}8]pId&LUJ;3.+Xq-ToW<4WEb_l-=B&]JY>N]aT%%,.2JhH0' );
define( 'NONCE_KEY',        'hl3WJe*D`eM~5<M;Od6h5cbVHLgD8=7?2Ev,9,5|c3gy!D0/l#!/x}}`UM7Chkh*' );
define( 'AUTH_SALT',        'Y&<2(5G5$.q51S`?e1>L<{R@ouE?2n^zKn>PW9G+h}{aoCGA6G#e~U`8?!4+~w,$' );
define( 'SECURE_AUTH_SALT', '6~6?S}jpW8I:c+(&y:S0C[/]P$lf)k4Dl./ Ic@)*z^[Q=H/TBLI,Q3Q7B:[C~mN' );
define( 'LOGGED_IN_SALT',   '/A9j+cARxIFG.Z]Fgv`Y9&[$K$xO/e9:f$9;(C@q89UKW]BKMaCjYM?67N$=|#2c' );
define( 'NONCE_SALT',       '<OwvK2Dp$-iV*p)A5C+k|caNb/UAk{`]S7f14$/1#pAI4xxy}l4YjB;7f|:@nR^[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '50drg_';

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
