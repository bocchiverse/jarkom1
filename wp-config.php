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
define( 'DB_NAME', 'jarkom1_db' );

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
define( 'AUTH_KEY',         'I`2|Wf~D8!KYaB/^@qC=T79ASq*nui~4(dOqbw)@j7IJKCC8</@[K*2 QCAG49_.' );
define( 'SECURE_AUTH_KEY',  'sJ8,oQ4B&Z9q+2+-,1!#_*%XOhc4-vvZOkG #XsB1Nc4)Xwv~(K)vkBa%6BCrjEm' );
define( 'LOGGED_IN_KEY',    'Dac3E>-?37EYl?Wl31oOae~0P4sZZAe.fX^WK0FO|}d?|CW56iz8wo]HaC!schH1' );
define( 'NONCE_KEY',        '+uNi{K(|tgd<,fV`..ZJx;^#s;*6Qxa::LP,AR)06@4wsbPmjgnDNy>3hsP]Rk8K' );
define( 'AUTH_SALT',        'ZbX5GjM-H=t}e)#}6Y^W,m=CmZ;iseY}3vKGskXb YL2),B,Vt=jlh 8.*E8OV4G' );
define( 'SECURE_AUTH_SALT', 'p)[ca7{/ztEp/VE$|HNPoCWdUZ$x0@Pk:D@_`lCEuht1wR((#(i! |i3ESI%^eU8' );
define( 'LOGGED_IN_SALT',   'e*J~m3nBy`Hl-*rE>.jcvAP~|tunr^d+fW;c,WU|AEWJ-D[B[H0X{+AE<w(/M;4c' );
define( 'NONCE_SALT',       'w;#u?Sm<-3Hyun7bw`=MBaaMKa1)Xa*PQCZs1[R0~cNo)~Q`/<c68N--MlA_K[&]' );

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
