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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coolmat' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q77=D^ZZ]>k&nj4}_^P)FGd~FPVWqWzz+RKRT6J.8Kvc8i1Y_5XPv5VRAOgxr-lI' );
define( 'SECURE_AUTH_KEY',  'KmJg~-$F#Ygnex5}*7z9vDhNumcB2=fYm.6vHD&W*q^=in8 F m7KC.4qt~FCT50' );
define( 'LOGGED_IN_KEY',    'xvvT_#i}.Evm=ABJwnqQ(*5zZPb?3&A$IPmw<eMKb{#x1u#t}gPo!Ed;)B463+J&' );
define( 'NONCE_KEY',        'Zf[_v8F].]>Dl>uq@FAA3ovS?*#f.$!.W#6I>Hm{fHSl#.g(F;{OM8xxisQ7&9x.' );
define( 'AUTH_SALT',        'UCbiA?m/DqG&{HYYa61hSxO4M$WqMy1AXTa*Zq`E_RhX9IEcBOn[Cq-wXy|AMphR' );
define( 'SECURE_AUTH_SALT', 'OBjrp`MjrMF>O*>dQkdF.}ez1N_Jz4MSbsJB9,488i^t91C?OqJRlxmmu6XeWx7C' );
define( 'LOGGED_IN_SALT',   '=a<J5S/C/Y~@Y|FuEuTRbUw2k*5KoLmOm3S7.g*.08.pHPjlF@&^8<w@$q35NA9r' );
define( 'NONCE_SALT',       'u8e#b/gP-GRSpU.=u?,LFI3,w2vsvfYR4wqL`8YX/L/c/ppAxM%6VCjX`*Y|*!tc' );

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
