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
define( 'DB_NAME', 'byastore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'redhat' );

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
define( 'AUTH_KEY',         'F75-E$X!:`N<2Z;>02Bv=O{SkKbZ2.S9Huu]}Pf!g!{l&ko@f|coKIP9!A|M0CS_' );
define( 'SECURE_AUTH_KEY',  'Do!OB=I%y6!<y9g4/-]RD5-*aR(gU~wocRphmv)U<@z`HJ`qlC^y4hULC&Sr|OVg' );
define( 'LOGGED_IN_KEY',    ');u%;dLZq18QoR#Kcf?{@74/D%nW*FxmguSIZ}^K7V>YC99OVG}8f|rr@$l{(75S' );
define( 'NONCE_KEY',        '[^2nq-6QLl}H,f?{)1}c,9G?K@mdh/=~6!PYFu44@8^D5W8y8A`T^a*6u{1b}*Tr' );
define( 'AUTH_SALT',        'cnFU9K#ESQ@2X   pmjpVM`:h_:ZDdDB8TiO)mLI~]#RWCx8]#D0lhOOKv`4ugL&' );
define( 'SECURE_AUTH_SALT', 'D+*,S9_V4AM%&QBaFYVo&(}o}1`zK1pc=`j/3}QhaDBFN/|k$qQc6i!.hWPAe:Ue' );
define( 'LOGGED_IN_SALT',   '#qL/H}u7?rSG>:u! |>s9sNgC1KS3SB6L3Ubm?Fd@`JM0* iJz%@Kn*kOE#jRD?;' );
define( 'NONCE_SALT',       '_ OuoM<gf[T0xFQ^svbLC-O=+0eS|(E6Qi]Ylo1l|pk/nPum8o5xehHtG5aVYRh2' );

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
define('FS_METHOD', 'direct');