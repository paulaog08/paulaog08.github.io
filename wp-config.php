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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'QMd7o+Q5m,z+&)wuV9}.U.;m*;&msAq>.MW,h@pa@v0osMD=)xuoBIy.TR9l$ Xs' );
define( 'SECURE_AUTH_KEY',  '_04@p|a}~O/MP=]n4Z.1Pafd1*D(OpnS9&1ZHI^)H8uLV&/tq@W)5PnYpnsJ}BV:' );
define( 'LOGGED_IN_KEY',    '&tNi908|DE*m?oN>J;!DV2J^ch5v;{nQGPQ6``d]p4s|/1ea>Gf6i&<@UqQQZ LK' );
define( 'NONCE_KEY',        'DjjESX8^<5K!DX$y?B4vL2$$?i1D+6uK:s*5b;OVZU*]]A9g3H/SkTacrvy(nJo;' );
define( 'AUTH_SALT',        'LutJXS{ZoVR58Q[eg4 _^KXp`j`t-}Ag6,B.[,a]2^x,>o{:NEPK/0+;2myHPh-F' );
define( 'SECURE_AUTH_SALT', '!Pc-Bln?1lAf>pv,I{&lLr:?;ew&}ilk}-HPl_XLvVG;dw47u`zp3B)J.Fdb:r+i' );
define( 'LOGGED_IN_SALT',   'LLoD5}lB5{=~mU9Qt$h@$+icE3;Th<}:7Kw}H2^5*[@Xi.Ra^[5KBV5T)fC9z4e3' );
define( 'NONCE_SALT',       'y`ZW[2!%+g=xrT!,hQr?(,tf8*8[P]U!>&dT:-F/lhr@zKKV1t#b*wYo-e_,1D3M' );

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
