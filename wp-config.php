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
define( 'DB_NAME', 'stella' );

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
define( 'AUTH_KEY',         'a<d<J$=X0Nc8 1WGQz_t1eX5t:*>L2gn-6!?B_Cc:a]L0awle<g=TF#Z0O%!mv.>' );
define( 'SECURE_AUTH_KEY',  'GaB>pUeZ,1zMvkt,>N84$Y/zQ>p1fYgS>q?EBTB89,/=g),$)knCN2t~sHIl5lzR' );
define( 'LOGGED_IN_KEY',    'qTi^%?lWi]f}wed*2gUX7l3Vyt0?M~q1QB5$}Xk&+9jy;=jhKfe+YpGe[u$i^j)f' );
define( 'NONCE_KEY',        'Xc.LOb%+px!jCK7NN;RDS}@4HK#Dz{_xqeN+1WmZK$Dr&]h1yMCS7Ee-#Gcp=F@&' );
define( 'AUTH_SALT',        'ng:q.YeaB3`rv/rVqpS6auU2,Ch+>Nem$fu>pl&qP?!Kh4Z<]ABuO^^_kHq{$Xul' );
define( 'SECURE_AUTH_SALT', 'KkLAY&,D_&ZzfA1>iEfH8fZ$Kf/+O_Tj{fMS1Un}4&=Z24Zx3|XX`7|gbmBr6JYM' );
define( 'LOGGED_IN_SALT',   'Vl&nitg]EAo5hifUZ&mC0UZ`yt-XR`)2z/KO2r<T7!Udc 8u:;kY5]U^E*i{J-0{' );
define( 'NONCE_SALT',       '{x8Ok6-$M#pXN*:N}^)9:V(Sg<O@<,)zarSJISxL$l$wGsO=FSB!,U:$70{Rl+}o' );

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
