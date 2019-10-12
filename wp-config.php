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
define( 'DB_NAME', 'db_desapantai' );

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
define( 'AUTH_KEY',         'A=xL+TO&-a>=~<:9^^3Hwn<U00*[QE:23Fqc&MV(m_?d%+e:.Bg!YL,CSWz2fjfU' );
define( 'SECURE_AUTH_KEY',  '>;K6y#QeC*/dfUiTnc<L?uw/63Nf<VeKAph-}Zh$ELyqQH=Kf)P4i%n!x87xmuqz' );
define( 'LOGGED_IN_KEY',    ':d{9hQ|Xc0jQ)A6q)f-K)v*8N]OX/aQ/%7?fC?,sYMr{4c`Vvx<iwis *d9mr2&4' );
define( 'NONCE_KEY',        'zn4[}+n4;{AE`oi~9l.<_y^c[(lr/E-bF2D^LX|X[1L3)|YiNo4>GuxzB!g!`J~T' );
define( 'AUTH_SALT',        '. sl/NR`5@>ty&K6f3U81Hb3;J}2V/5MC[1[!XX.Yjex:KmGEjz{ES>Mtymod|{,' );
define( 'SECURE_AUTH_SALT', 'm:bO2ZL{-F^8b6&y.PkK?@Ucp0gZ<7Cx%ESC|7G+7huZ:U,emT-ag@2|Be2g?Ka8' );
define( 'LOGGED_IN_SALT',   'H&>F:{U(vE]5NPiLA*7Ye?W3Q?4$l`c!Oid~R3?SO4I8sj|9WX_ob(_Z?ux77ak:' );
define( 'NONCE_SALT',       'nto/V,Zm$Af%wPnvswu91d-eyD3}()9Dau:ZxUuU`qKg*~;,!Q!f^T}4lmC$R/0]' );

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
