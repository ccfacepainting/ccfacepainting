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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ccfacepainting_db' );

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
define( 'AUTH_KEY',         'WZwY%hy7t>CRo|aP[7O=KDN&625X%^KLuhbl[n;bd>*9FiSWSOr]]oqS(_1s7=+G' );
define( 'SECURE_AUTH_KEY',  'c<QU7]UE%_C*(9}aku8USVO&G`L(%6]7lNHtDVG[K `)Qn)X0Cqr?9*og9GVE-He' );
define( 'LOGGED_IN_KEY',    'Ii/`}}>+RqO$LHCWs/OZaPt|Nyks8e@oDJ-5.G0q5+d>!c$854 #fOTu(UUuBS[b' );
define( 'NONCE_KEY',        '|wwgnubJTxS|<B<QKxrn{kQ>@!Q-{G0GLcUH$ +iU<Tjg<k/2KFUF;O|(QC2vw$T' );
define( 'AUTH_SALT',        'wRd4hqp;0~k.;6j;VQ>5|%r[*RAWKc04:@365Xmy/CN9ovlf7f+eu3`My0FmSXbQ' );
define( 'SECURE_AUTH_SALT', 'kuC00j}}i+e%Wj0+_+sr)q?yTB<Gh_e~qOBWVyd614=BA5EG~s2~G^zIqv YS9Dx' );
define( 'LOGGED_IN_SALT',   'N}9$ N2li4*,zKH@7hA^Y}Zv/02Xa6N/,m0N)u$m?4UcRHlnulPcJq-%VcBm>;NY' );
define( 'NONCE_SALT',       '<KAF#`:_XT~0-o+hiTnevY-O.`X`U+-WWfY=?y<{=!f|O%d[Sk?Obu<(]EZ#gVT?' );

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
