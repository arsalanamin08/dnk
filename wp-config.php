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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dnk' );

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
define( 'AUTH_KEY',         '@|sIH9pgK9kn`HXzk7&Wel^l1a4IeXQ!a*];10VmNK;1*CQ9Qqr8.5-#]z7]Wb:U' );
define( 'SECURE_AUTH_KEY',  'l2@jT+Fy=,k!A/@WgjFtS[[!VI-M*4I-)YVI^+3#gLKDqryu{cU;ZW+n#Zeoh9u/' );
define( 'LOGGED_IN_KEY',    '+#R[9)Ro<Lp_]UHw&,c0X&D_.j)*KK/dAnb/]vH~=d0./nLG!UJyeK8GLo>,XzVN' );
define( 'NONCE_KEY',        'd}HZnf{1x$d9N9T]0Uo<(sZ}95*(8$Rvz17DDr+$|m/Ij6hmjU&]UV<|FkBTy!_N' );
define( 'AUTH_SALT',        'UY BdEe-F^`s5RyEV 6u~<t9zh4D>3{Re(/x-,shP`UMPsBr}ph`16ww-1$WhV5o' );
define( 'SECURE_AUTH_SALT', 'm<i[KHk&E!nP`vB|=~Jhk6FCFHv|NB|n.)ubSr@uF*;(lsb2;fzj(7rzTcpK;2BA' );
define( 'LOGGED_IN_SALT',   'nY:6+m-BX[QbpaF!@=x]8Ct.iKt6JbO9:F`dx65o=6Cn{m/G5M#2DdY%Qn(ilh8[' );
define( 'NONCE_SALT',       'TC=y.}=gH@mP~b7+}~Mo<s<RX/U{l&#HAO4WwXbIFIKn!qI%S|#u+Gp:CjfImlXj' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
