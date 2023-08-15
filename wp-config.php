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
define( 'DB_NAME', 'helpdesk' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'z/cRl/Zw8FRK QzGoC@fwuQ6mg=HrOK.4~*5N_4ZSR@;Q8wsoro@FAY$FvGi1u4|' );
define( 'SECURE_AUTH_KEY',  '_^AWw}.P#de%uzGLr{VLs1tKJ6yhi9]a},/zeU#$z{zJ)lg9@bt75ky9Fxd&Cyq0' );
define( 'LOGGED_IN_KEY',    'kha`0z?a9ySv:/]&8E!d]>sb}(RfN}Eu[DwWG(6c*2f UUV<Tca^c]u=,%8EYg`$' );
define( 'NONCE_KEY',        '0;4hmOFhj1V9$)x].E,_UoS2^,6fTW7 pE>pBty-<AhE*q`PGl)R20KOAEk*Ao5|' );
define( 'AUTH_SALT',        'F8Z,Gs{YST~IszkO%G$hnGKFjV/2$=g~IAEX0ia%(^0qD2[gqyrfoc.F=Oo/GsY@' );
define( 'SECURE_AUTH_SALT', 'b{XNdzS%Up%V(zQ8}QMTY!/[$EH@#eGxXcGo%A3,1:omIr]#^*(8kqx&{#x_v_c7' );
define( 'LOGGED_IN_SALT',   'qa|}TiUr*IaoQflAJ2^YUL!-PsRsA&:)jVK$aF;#&Aq,M%Onyl,w ]+3kA:@=;/K' );
define( 'NONCE_SALT',       '$i$./r^`|jQ>/^L5z-<`Uc7E<yTY>i^bai hvU{pcN7cNb}jHBX.[Uj%vzxR%>gK' );

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
