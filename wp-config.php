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
define( 'DB_NAME', 'domestika' );

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
define( 'AUTH_KEY',         '*CDEJ&e{j[Rp*es:-~ k?.Dc#o*&.nOix[vQvgitjtQeU@ceBxL_IHIUkBIMvpbf' );
define( 'SECURE_AUTH_KEY',  'C7N{4b0&bgItXY]9 _osYA#;spo`!K6%)$hJ~ZtT<Gy]@=mGHE7@kdk7cq[#lL1k' );
define( 'LOGGED_IN_KEY',    '4rBY}(RJ>MTJ;L=gI`fd!#n1/Ek/g1;]KSa1?-D;saL)v(u>t9~pPlt(fUh`.|O*' );
define( 'NONCE_KEY',        'ts2xz2}|8wrD.D69]v.arGB~Pb:1Zoqb4fs[2$,nNwwHx2f6i9xFow5Y/q~|hRUv' );
define( 'AUTH_SALT',        '3$w;Y`sIJZYSO!f{qa{.5 tuzv/1U1H-u{6be1(od-Z%HwmQspz0:LICP5)Zt}G|' );
define( 'SECURE_AUTH_SALT', 'j}(`~n/R&}CR{[4CYqxu$bl<SRp7(_kZEgr7S3$v#r|r/h$gDg9f%yH,}tI)r98a' );
define( 'LOGGED_IN_SALT',   '`>]JgfG]LW7z:TW{Tk+|w+nW*=dJQLE&-7]]70mpl~JQ)^vhdmc-=,gm<6h}W8u=' );
define( 'NONCE_SALT',       'Q9S7:DtT.E9NHt3aUz!W:*Q-.<^;/zhc+nfTa[GM_@D Or6e9^bNT?&M!|.5(=4J' );

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
