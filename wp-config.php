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
define( 'DB_NAME', '2020-tim' );

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
define( 'AUTH_KEY',         'U[brM]lFKKykj~GSohCH|/=*6rPvlK 5h-?%*p21BFEngdL-wdCKUlb/Zl:@JvV&' );
define( 'SECURE_AUTH_KEY',  'U0Y @J3=9aKO,)]K(meqP}az5|l$s4$Yy^GzhTHKp:8TWJ!)6.YE)>%o!Vta9+1X' );
define( 'LOGGED_IN_KEY',    '|)O1`d*GPQ^+ab|}6uux,?T@7Y8wHq:~jr/=W?tOk_Bm1ij;sz;[*BuKc3;V9+B0' );
define( 'NONCE_KEY',        'WCNM[,MO.sM,j8oVD`dSI-dYnM9aT-R:^6D^;H@&`XP3eCa,;QK5fg3m9}5.B)%b' );
define( 'AUTH_SALT',        'Suv&(v}TjEk_QEJPwPH!j#Tj(WI(0d#Kl4C|B3g5s!E3E(rG@f8|-jT5_ >M)tMY' );
define( 'SECURE_AUTH_SALT', '=*-D=tDQ7zR./|?!HbHG`B/g)?iI_VD!e;6Ff &8TpnmvW2nh4}M{o(kl^Fx2QS]' );
define( 'LOGGED_IN_SALT',   '#e6*#3%NIE}8XWEhFG%cW6x-g7&rsh36Tw#-?xl -T|A9(4zD&lp!4/V;[z3|aFz' );
define( 'NONCE_SALT',       ']#RN<s~w<K&~kP3fms-xNj,?PN>]{AY4->^*(z.1q?{wyaF(#.VGl:_1gG&L`D^v' );

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
