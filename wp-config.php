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
define( 'DB_NAME', 'wp21' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!/7Nm/cV4Mb7/[t`l1=zb5v3Zqd&ZY;25wch*Q: g G[I`QMF`hg2C12$~w*L%L9' );
define( 'SECURE_AUTH_KEY',  '.VC_`~Q$WxZ@pjHZTN09oWB=4PN*:Pc`V r*LRJ5A@AxLhi1AVN+>UKEqqcpQ>#[' );
define( 'LOGGED_IN_KEY',    '_Js 1q&W410Q97a[xD&Xj44OO:FSR0*CdomgWeK~K=DB~G_>@vqZ!z# UTr]uSLs' );
define( 'NONCE_KEY',        '9C]UlE>rIY&hRE[zD,N04^PBZnSJrH-YBagT#1A2h{qKKNm8Qi:U-ur LR/(v8I.' );
define( 'AUTH_SALT',        'jJHrEj7s}Tj&RS]ek<$ld#] V~$}ejIl]lbtBSl_cwGPF+w~JMH}Uwgg0j]P/m?S' );
define( 'SECURE_AUTH_SALT', 'E?o*9$f;~A*q]4M[46<YK (yG*,At`v;0&D%^:j0VT<;2:,mRC)4y$9jx!X*j/1`' );
define( 'LOGGED_IN_SALT',   '>8nx5AjSz,3nV~0%@v+`@o*[MkjD,Xswoz -4wfBf*k!DK^TLmlY&QQUdZ#XZt)m' );
define( 'NONCE_SALT',       'VG:c@pyUa(crO4u1%:QgFGJkH(X|PsxfL7;7M+ J$)[+2J8&]w;uJbB@uY1h2<?(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
