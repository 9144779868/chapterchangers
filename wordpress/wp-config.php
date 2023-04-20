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
define( 'AUTH_KEY',         'O^4VS>d?hjmk~_a(~>X1L5{WgvgF1&Q$WOFow)ooQ1qUF0M{~RDjAsl3]]Yo`K1B' );
define( 'SECURE_AUTH_KEY',  'Gs]icws/4H]]?fAeG>O+iFa^^zP&0+^2rxVq]yn~a*z//YNnc0XOGchOt?RuOKaX' );
define( 'LOGGED_IN_KEY',    '>}[mD]B.tVDX([tF8=9Q%L*Jlk2V*B*y5pyJ>F%.1uU+ 05t30H9J.yb5C3^Uqin' );
define( 'NONCE_KEY',        'L{;wXuNn!0H9v<lU3nWOu(mb@dEq 03z{^?g599w?SYR3ElTBkT`p+_7RG`uobEB' );
define( 'AUTH_SALT',        'w3_F6jmQ,>PV+^Y]zIknaoyGb2($jdc9m!P^*2P+; `0c4^$7%79 2%{F)~`N(A ' );
define( 'SECURE_AUTH_SALT', '@n>p~6qd9.U@5I(Zzl1ZKtP->qH%CHn-d^|:gU;4npUIUkC&8K+_M&R]s}y]|n~U' );
define( 'LOGGED_IN_SALT',   'FY.BLhv0/ZQg2_Hu7B2BUk5jHi~(]_k{E`DAAdi?HqgJv0eL nAP|Wpl5is|o<.2' );
define( 'NONCE_SALT',       'MJQ?W2KpXc.Q{-$LhTnFK2Cs20.l5VW;CF)4PBkp=9Jw%z5Z0&2Jp*F(EEe[SoYj' );

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

// define("WP_HOME", "http://clever-rain-43773.pktriot.net/wordpress");
// define("WP_SITEURL", "http://clever-rain-43773.pktriot.net/wordpress");

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
