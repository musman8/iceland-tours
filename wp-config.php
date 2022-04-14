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
define( 'DB_NAME', 'iceland-tours' );

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
define( 'AUTH_KEY',         'j+6koQmI}5L&GGCKZdD99>hwJaLkO,[ADg7qLEGvaXNh$Pt+x/k{yV*W[EW1$f}Z' );
define( 'SECURE_AUTH_KEY',  '-vo1,Obl$2Tx+ReF,SyJ4A2Y -8.>jJ%Wa:/h?iK+?dR^iwDe[gQHI253~Es:jLV' );
define( 'LOGGED_IN_KEY',    'M CaYS?Km_?v#]W!S5Q>!0!ZSxxOaJQNCyVdhV;c9yn:u.IIp%CJd_h!GqY8R%,r' );
define( 'NONCE_KEY',        'u:^z620^k@!q35TgBAT5k_nt3NiKe}-%FpB,J+4bn]ens?j{n~%2a^E|%2==q`}.' );
define( 'AUTH_SALT',        'wtN/V[Q%cm3A0kiDR[fQC uei>fbuCQ`6~h{ C-VhUTe,$_uwsDZ>XF)xs/di#Gx' );
define( 'SECURE_AUTH_SALT', '2{J$T?y;Dl=A;ZH^6dLY]KbS=tkvnm76?JJ~xVeodW l%0|Rr+Oo>EWJ8ZUvX[<~' );
define( 'LOGGED_IN_SALT',   '[Z3R+c4aX7@,*]l(P9$/!Knrc[Ic7O]W;|;nLFMb~g)J?|aR0M>gb/!?JU;p,|yf' );
define( 'NONCE_SALT',       'G`B17F}anec5Z.h^ny})4#!:0{guBkB+:Nh,$9E:dL3s9_)V4FbK4P4-o69kLO,7' );

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
