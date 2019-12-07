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
define( 'DB_NAME', 'fake-university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')k{zFF>r,G)`)8&hP}&7N{MQa%FA_H[=UKG2`wR?-B*19Ntk%i!+}9sSxng1G]y(' );
define( 'SECURE_AUTH_KEY',  '@hZ7!tez3~}Q[w-.ko!DbM/kf[*IfX;5$zfNCMP.B J!N7i{;1KYp:;NeJ^C:MHx' );
define( 'LOGGED_IN_KEY',    'Demt 4$uQ_V3|7=9P0cSVxn#P!]7e8W<4&57^wu5 tOZC/cB&Kx,7MU4fEpWFsep' );
define( 'NONCE_KEY',        'g~wyuy:PA_s6mFxW%?pI#>JCA]M9GI|gHW?scLkvMRK:x|dc<}x|suaw>s$,:[BZ' );
define( 'AUTH_SALT',        'XJq~Aal*Lrxu-jq:za!&?It8PK<Zsr:]Dknw*]D,kK?z#SHs=z#~@.>AY;I6E!&J' );
define( 'SECURE_AUTH_SALT', 'EPvoytfJT`+{?qu8m/nd$_tLxk3k63_2.?R:w&EUTu5r_h1Do2}CFQb?KI1DrAU_' );
define( 'LOGGED_IN_SALT',   'BRypC?*I b8,HR<pmn=`b=*Q!qUgQQ&`R64Al:sLL_eD5xk^,tsA9ZX&I@F- |@*' );
define( 'NONCE_SALT',       '6=OF,:A9Af=[szoDht/5=DR~k&&,-7jVi2&7.9X/g&0dHkkhz3AULd|+q]dXVu:m' );

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
