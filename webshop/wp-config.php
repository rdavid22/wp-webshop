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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'testuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345ABC' );

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
define( 'AUTH_KEY',         '$|R_AZE)IhwrH I5efiJatA*o,<Oz8JLpelJg:/o=r7>k&s`m[$U$#yf7mgM.Ta-' );
define( 'SECURE_AUTH_KEY',  '=+mhKC} hlFQ`i!I(1IjK6qWN/MMn%WZmxz<[pb@AQlcI)ugRpq02Co9)%YK.NpV' );
define( 'LOGGED_IN_KEY',    '3F&E:` 0vXYQh|Qv^oU#s;tj`DRq)ME4jsvymx5ewbZ)D/S0IT($]T_5?cR3< ~W' );
define( 'NONCE_KEY',        'rUA oGW!Kax?P#KKpVXz8JDv/7dsaU/3AS]{cax}<owlPn4Ox}+OnFZOs|D0=NU:' );
define( 'AUTH_SALT',        'C(IY=V1B>WTX`,pN2usfA, &v4HF<r!)+22eSl3zo+XyGo.%Db[,lLQ$OTBHv;0o' );
define( 'SECURE_AUTH_SALT', ']MwVI[PqgsuUbBV<KH8cb]D,>}=k|>K^vwnRM7!14aN+{j+A*G6pe*XYrN]-)X>f' );
define( 'LOGGED_IN_SALT',   ',:,+$SH.[!V!-*b/*{=K5Z.Hae&E&$(56 BQI[`PKWw]l0xgP;pdvqJ$DPj4$!uE' );
define( 'NONCE_SALT',       '1@$}hT[FK#Gp#!tPC$iX~S~Y,@C+=Di|kAiZ(d55_+n*-|Xa<q=>jjWUw=]T6fn2' );

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
