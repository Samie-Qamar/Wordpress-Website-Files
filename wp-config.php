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
define( 'DB_NAME', 'wscube' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '01<n(XKmEQVB&&cYJ|%Oyf.`bA;I)OPaUY[4=,Zu<]Y0-lB6x~Uph)um9pkwFNfe' );
define( 'SECURE_AUTH_KEY',  'Z.`J7k;gGl}^8:0n4]T)/NFg8(A7RPu`;}7em2rm!pNe&Q+`sg:FaQ}rI.RC)Y^z' );
define( 'LOGGED_IN_KEY',    'Lq)> g<WaG(RCj*|&_5%ty pg8,(,M0z*3jVPN(UNU]!ded v%CsSjIedr+T-G}*' );
define( 'NONCE_KEY',        'ZP!,K%C_h(b9]_]4t,:&FP}$Rgjh/_#^m#BMVyX+&7l092Qoa37yFX9zs~6ePXGo' );
define( 'AUTH_SALT',        'A,D4&F!Y}iYlN(/hF-VKN%L5z)j38RJNA_uc6oBp@1)Y#tpk]~Xx(qSD1.uzcV3w' );
define( 'SECURE_AUTH_SALT', 'NrEKT+I.QJY,m,y><MZ,JN`(n#$sW9{zOAMG:KV`ptQ_4eY2;jW6rQtf@8_p!o1y' );
define( 'LOGGED_IN_SALT',   '(M[l%t0=J$STw%6s]8BVRRem.PN+-cx}Q5.sv)hJUT,j9}):eT:4aJ<AM8ZB6-S|' );
define( 'NONCE_SALT',       '5|`ezoNj^qC4~bJh+.T8tK~fvr<b.)~lw-dVjiSI*el:a1O&`CP7#YqH)DFLo87@' );

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
