<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J~U:/1{2M}~h(!4{XSxz#.#eewD@yE`JoNyp2`wnmU{roIcRHap,2`+D39MYA-d5' );
define( 'SECURE_AUTH_KEY',  'DanDE`5iVslc?8*^57|I~[-Oagd?FQO*|w5d .m7h:qb-iu^O%km%rgi/pq;Q:5h' );
define( 'LOGGED_IN_KEY',    'z 835vfAE(zrYe_xnm.~,:kQ@!xCGG(;bRrWlIw;f+t%!w=onOllFyuGH$_sL1Uh' );
define( 'NONCE_KEY',        '^*Fn@?U0:8NM*8Y/?AS!=<}X8Jow>)^$; `@5d`*+&+WlVBug9a{Kq0$GP2Q@:(e' );
define( 'AUTH_SALT',        'CK%Cm{I7Y2G446-~5FOMlp>6+CIGSQ#[* fi2caa%_!)#o+=-*ZWks;&jlg)@)fm' );
define( 'SECURE_AUTH_SALT', 'ZTg/(teNA;![Bt[ol}Q;Wzc4exWvn^-WyIrzX zWj/n__UdNIq?22:`U*X4/Pt_a' );
define( 'LOGGED_IN_SALT',   'a6U`(jYQykXU6,vK>NkDI0BInNd!X[^e%>k42F*CPUI*^qIrlAz-9K]rR]!+z=Gi' );
define( 'NONCE_SALT',       'Y?bxFC+j&k{?&FGjZ{pP]G``.(H~OQ*c.:YOhuP$[@u_x4Kpe]u;U-.lGF5+uZ)W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
