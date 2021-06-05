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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         '2X]] <&7N@{}GMlMjFkdreysi(JTre=gpi*mo]F]IDs^Gkbs=[X,R|DDK]DrCbBa' );
define( 'SECURE_AUTH_KEY',  'bscs!~(|X$0!zo/S4d32Z^I[.>YV>)<&mtXY7$=}{ko&?z[0f:eFw<D{m{,jUXf0' );
define( 'LOGGED_IN_KEY',    '+w4J.6D}8;VJs*T$H;7S|0fn^)I`JA|kjk$XPukHsm:R[S6$4|AGVWUU?F{2JuFv' );
define( 'NONCE_KEY',        ':YYO$vRP1~9eb7WnY_o(U&1IOVr~uEl7jo44L=3R*VpEIskVGDIKsL4Hqx%jP<F4' );
define( 'AUTH_SALT',        '=3G2dm^Q@~2%n]$zl4obPE9gJ73H:i<l]E[}mg)b!Dx|EJ|b0U>I(+j}PI>C2)G`' );
define( 'SECURE_AUTH_SALT', ']N_Oms61[? ?q:)YZ<GGOv$?ol+w/J7tOMEJeSsIag}WJ|xJ{K(S,p;b=*NL$4!Y' );
define( 'LOGGED_IN_SALT',   'LCI}fD.X9DM6OC%k0W;)hZ.]rCZ<.`FjuXH2ger9.ECt:JB(/dx._vmfMp4^-bPq' );
define( 'NONCE_SALT',       'J?Uo!TrXbY*l#A79Mgvz:V^dEvVw`u-zvu?]O|tX~7*}K3b:&P0}k$A:/XZ/JkUf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
