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
define( 'DB_NAME', 'adventureguru_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.UWH]}`dE5[Vr6 @Dg<+b}N{pZCedW ?mdukEByt]h_+k),`!}lx8zu6SIn?,7df' );
define( 'SECURE_AUTH_KEY',  'xe~d^`inTnK@E|x{ROPy/P}pCxM~h~9,oES9zUNnIs,[R{=z]#-Zmv)Gy%<~k*@k' );
define( 'LOGGED_IN_KEY',    'Fg=RCn4qgw`Dy2,,9Kw@nHIw7vY+fG)P*CY`bBChK><x8/Xeh23Q#eR<2tb6};UQ' );
define( 'NONCE_KEY',        'W3(l$Xb8)&HBZ}i[AqavozTA<gC.N5iJ,j^#|(pBoFb,IJ.)82Je2/_tpZH]~&P?' );
define( 'AUTH_SALT',        'V)S>ZgZ?gR}Q^hOT$,*1Gg<sqYg3^>rA0d6Ds*[YX?:0w/56`^9nA7(=?nRO$ }>' );
define( 'SECURE_AUTH_SALT', '[;@HqBZRNA6&2j@paE[Rj-A/p-<)P^;Ml&tfUsTt&*}ov:DcdE~2kgYALN-kxY%A' );
define( 'LOGGED_IN_SALT',   '!L&NNPaPFVL_xG4X!T*|ikwqX-;%H>3%C{%Nzx!`]K)]~Dt%+)?Ku5@/xMU%Y6C2' );
define( 'NONCE_SALT',       '{BkLESDCrx.$vPlU(W]&GJQYAF011 zrmCPHcHfemv{arNP>uv#2F}zlz#,D)`Oi' );

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
