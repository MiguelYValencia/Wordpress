<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '{q6x-:!hIn_X[t@%a;hH)IzjjqMgmFaQbe|qkk+F3`B(5mO`(%W>lF-|Lkw7-sl^' );
define( 'SECURE_AUTH_KEY',  'TL2HUmCyj*Iiw]]!LT}:._ZoeCsnbr|_Rw`RrO/Vtf{bX4HA>@ML435Q/DwM9}-v' );
define( 'LOGGED_IN_KEY',    'C>Mq3H l!7avrqIhv[p0Lcx 2HU&mat&cVn]IayQ 1 NFpj];`DzCP7>v>?t7#j?' );
define( 'NONCE_KEY',        'oukTHx>AzE3xF`wQJf^AWbd*btzm<Z}y3}9j) 9ge]%?g-erx*.jjn [9i r_6Np' );
define( 'AUTH_SALT',        'G&);f:V>rQWhe&s0v+#pBh?<GOJ50O{+A;b]M]a 2h[>l>:9un_Erz/ N#3$yF?-' );
define( 'SECURE_AUTH_SALT', 'g|{ |!>0=~Xn[C>XMFp%|lr;52j<hf7[Z x}%Mo]P5-G8.S]r]K{CO9t!eWn&>~,' );
define( 'LOGGED_IN_SALT',   'iv]A@~d[Cz=N,0pL<<3d}){$::JVzY~&7T[v;Tqy@IMAyi~Nr:$2s>i^v`=( L3Y' );
define( 'NONCE_SALT',       'Ml.))KB:<j`: 04dKk,]bkGP6<l[3%=8R/tVF0k[L%|s2pxIv{j:+,{u%M8xRoH7' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
