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
define( 'DB_NAME', 'wordwoocom' );

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
define( 'AUTH_KEY',         'Oc#x[gFeCp767p+d]}/h[GPEC>xPx A)/v9aMRUW]f>p/h#M$kAn7R76F/BnOVei' );
define( 'SECURE_AUTH_KEY',  '`ynCnW10Sb/gnG>jvke)/KE_.wfuiqwbW&q^Ai9,ytV`KhtDcWar^t=:FgUx9HIp' );
define( 'LOGGED_IN_KEY',    'CC;rfx`Dco!%@s50)4HbR40;h4d]|P=4)lz_d#RNqh]OFUOdEc[Lv+EZVEQ6pU1+' );
define( 'NONCE_KEY',        '*t#JifUrpzem2Cox cyB!m&`!(L_Nl P&7IrqR+tRCp[wT4c:|T=~Z{iv9 putog' );
define( 'AUTH_SALT',        'af$-J-NJ78i^o*HP/#:tyx+B<8T_IR}S6>; k8waW=wbS/z+-sMvM^}!tu(+VF]T' );
define( 'SECURE_AUTH_SALT', '/S*?tG)hq>,3?<<`@L;l_07;3g[1I|?$~XL9Mp+Lt9.Y_d `*4JMpQ5G.ea0&FiT' );
define( 'LOGGED_IN_SALT',   '!pT/?}U6EwvuP.U_/&AGX%a|@mN|WSv~|1xWz7YcOde,S}Ou?m6K3(LLoKHD#L#!' );
define( 'NONCE_SALT',       'JP,@e(~kNqDE;OQ@<nL;CCP+m*Wnz80@m>y@b^sHx?uA3YQFGRB/tUN$Vo)(mLw#' );

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
