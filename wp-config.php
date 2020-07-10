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
define( 'DB_NAME', 'adventureguru_db' );

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
define( 'AUTH_KEY',         '~6 6<~.,,&~7]kW%uYSdj4jjr`FT-AZ)#kV{5Z|XLMd!;]tI6W_?Og<wZ0ag}APE' );
define( 'SECURE_AUTH_KEY',  'gb=av?X2OPD!is B8Ga-d05|H7_ w}w=AyFb9vB$TU`/s.P@f< W.$>w3,~O#n?M' );
define( 'LOGGED_IN_KEY',    'PuEE^BL=WTRq=z[R6> 3]36zm}rtxWz{kIIkP7<u*&?0e<X2)A=m}`5O7i+{I.x[' );
define( 'NONCE_KEY',        'S0NGyr0F>UN_e#/Ph[g^]`uc=8{8+*{bpr_=~rX}<A1s5Bje$LZcn]$i]B4*})+?' );
define( 'AUTH_SALT',        '[Wq2t@nw!dLcT[rMC$[? *S~wop!z?B-e>{bEmR<nMJt3wO|jg3*2${x+s!:2o&?' );
define( 'SECURE_AUTH_SALT', 'wmda{RVGc)TMr^Q+tKW@gu>U)M!K[aT=!2qj%-fWN9a]MXXR_[P<[j)vZ(PIqS`(' );
define( 'LOGGED_IN_SALT',   's&!-M}eY|zJ Hai.[@iw0 _$gGoJAq2$[_kN)u8vYeB!DDN2YCYW}hT77;]ikde%' );
define( 'NONCE_SALT',       'G.@ow;aQ|?P1cQmkigXa|cceNJ7_)q5K)zzI,g|[j06g?cP&LL5:pr)Zgis7)Lu9' );

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
