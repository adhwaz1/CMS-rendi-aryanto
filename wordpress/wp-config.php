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
define( 'AUTH_KEY',         'qe)~|Rw,54.D5K&M7A9xew*9Y:^7O$FWJ?XW/I3oTM1P=,(yT`9/Iif~G`/e07.%' );
define( 'SECURE_AUTH_KEY',  'l4C+)mX>IFXohBXk0R@Sb:/HY!mvKIax%_L@h]iAh$a&2yq!?G*&_(<u. i5+v=_' );
define( 'LOGGED_IN_KEY',    ',~OB7[GUs~~W/?zWKfV#q7x{5rvH,wyvUa-4Nb]%0-#3(4EZn@)tDga!i%.IWR$F' );
define( 'NONCE_KEY',        ')S/}>t+h9Ah#Xx5)pit3IWY7j8X>>BhFI`m#]>`ztb8H@F *$*5EkQ>p|@TO].!w' );
define( 'AUTH_SALT',        '*^V&!=VH?&PjdtJdSTy+!lcX]xUT[*2uK0PN;,Z@A[esj>LegC]v{,[-ANBK50IK' );
define( 'SECURE_AUTH_SALT', 'EMQ-qE?N3|3r!V3Sna@! oXZlwx!oUp9(NO6?N(9YBE5qJ]#>)(+_MWp9^Y6k t=' );
define( 'LOGGED_IN_SALT',   '(k<J#^j)OXT(Vlr23,KIJ~4-E{V>2[]oY$^Ws]5wS;%P]V3!NfH4RWVM7I -m#En' );
define( 'NONCE_SALT',       'df!9W0AZ3}Wa]y.Fup}$I  ]rjOs>IddUTWkeXXZF[f#lx*$7^^yH|I[lWyRqWpR' );

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
