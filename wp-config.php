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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '(l<MC(WJ.yGOF~und*%O2vxYj5BzB][MLNs%XLp^)6C-IA9{(,]n)6OUoPDBK@Zd' );
define( 'SECURE_AUTH_KEY',  'R(P z>Rarg rvm%-p+yl,:4sk(JSg(6U`9RKHxYh~u}!SF:]r3gfoPLMvZDK:~`D' );
define( 'LOGGED_IN_KEY',    ';c)<I2CyfDG^7<i UTJ$LN6TF^~4g}D1NWN{kRBovswyi8R3B$!oV-fmA_6U0H)S' );
define( 'NONCE_KEY',        '{*RgJ@tA`_UvS;^<lIk5N(gL@~2`;W$J.w!^AUEhlV%Jz0TK.%g[~UNFZtxU-Rcq' );
define( 'AUTH_SALT',        'p-4&#%|QER<&.sptB{0g7iHvAF!`*16JR0rme# 8pKsi{{[0nZIc/2#OLPPwbYP!' );
define( 'SECURE_AUTH_SALT', '`Zl.4{Q ?rJ2J*Y-H@Q0.q=4A$Sc)8n$c%>[|svL(;z`#{f#WczVtCKcEgK1O0DU' );
define( 'LOGGED_IN_SALT',   'DY|31WrW:?B20,=Sa&&8;+N 13 5z.%k?k69P73O^nAm{3WArh rO+017XXjy(Do' );
define( 'NONCE_SALT',       '}Ue(psw/BcGwN^ZJW`m6V(+AJnCU4{^cy{I*d)CCxdtn;u.@$xr-dYK=f{-%Xcgb' );

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
