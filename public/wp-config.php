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
define( 'DB_NAME', 'wp5' );

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
define( 'AUTH_KEY',         'vDmbMK5Htfzckt6LCPS7r4l|0Ez[2Fi}K>|/:!$`w97$n+^{bKcrT@hxuZ~Bnq5F' );
define( 'SECURE_AUTH_KEY',  'Txyz4<#rV&Z2?p(oidOU;FF&b:,n1/%jJ|GutKi&/}{)L!9IJ+*4V;4[w*8mh~H(' );
define( 'LOGGED_IN_KEY',    'oNHKQDsJrhbkvLy=`->3ML;T[T;zvzW90]USJ6J<5A;X)C]t8d2:J+$;~4MN*n/7' );
define( 'NONCE_KEY',        ':[$ EiV3UOj2@h`jHMDi? d|=}qD`K#gN9ZdQJf-(bc@NS!;rxCr0{y=SC4DF+pp' );
define( 'AUTH_SALT',        'Pfw&D57ca&fSVS [(7QkT:!yA10.{%%x9l:|x~qhR4DP|Ez7PM&JeiIA=6,9<2/6' );
define( 'SECURE_AUTH_SALT', '.U%jmxA[=K@$VFbCq^B$luqW.f2W,mQ{`)W}nH0`e&-uO;`d|b_}f-FR2Y0y:+06' );
define( 'LOGGED_IN_SALT',   'AsVp9Dyu+ezb:4&C&[^Pc|bcho;?#YF9PK5 4[X#&BHpi)-]g${{Ef>oFS?k6CnT' );
define( 'NONCE_SALT',       '2haW%BF~YQ*[P<KTEqFX.LFWRcuxO}Adp|atk|dl%5Y*IGZUV^1~vDK1WA$e@pyc' );

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
