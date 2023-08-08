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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '|B+l85d Wy:CbI4{:#rU=w#$zUC})Afdb!ueEzSK(c`BUGznKm-^e4@x*c)R(B?f' );
define( 'SECURE_AUTH_KEY',  'NE0_</0w|KI[OLb>ylS<<3;Ckd81;0!4D[4#36mtQdU$+g7La%;pM}:4YmzPyKyC' );
define( 'LOGGED_IN_KEY',    '|s#QlULAAIQ|{EvQ%DWG,}XTpz`6rEFXBdQ!%eVu?oj75aCThd_+5@t)*Z_>&XGI' );
define( 'NONCE_KEY',        '`D bh;{D9gO9UY!@->-,@e+XvC_@UJ!Y+R~~pEDOi,?pedFzlhc2#@74|2Ry-/B@' );
define( 'AUTH_SALT',        'Bgv6&)|/P_0z!`{,HYJ#sq6rPLWj$-U@Nl%.sZ{f~JgT%L#!IIcV=y]6FxM3-|)/' );
define( 'SECURE_AUTH_SALT', 'Yzfhl7,>Yg`oV2dpdfR387tG5OaU}XDp yc~Ux/;OJdtbpAG=(_mBQ<yHM%X8srD' );
define( 'LOGGED_IN_SALT',   '~cUw~)~w5{>ecjL/;]V.^!jSI3@H,revij@F^(9oWI1${Hk_&^kRAqL@qzGbfy )' );
define( 'NONCE_SALT',       'BP&Z*Nf}zKO4%/n5VyQ02rsJg@>?toC@zxUJq[1)87G-;uV}!s3`v.#be/V:uHao' );

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
