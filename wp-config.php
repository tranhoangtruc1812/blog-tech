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
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         'RQL@z)L=MmGc4|}>]yvS1+,7!_c+P8{T3Fh~N,6At8o3yFQ>(?*8mI}ek=8zrl29' );
define( 'SECURE_AUTH_KEY',  'H*E+n1i6H:*9<Uao~[[~DZGMb)u1t!~02&4(.,Wuy<[<<c;?QD&W- K,PQD:TNe>' );
define( 'LOGGED_IN_KEY',    '<%K{6qoR9[nd@,kmt[9z*|2+t+3Gn}],u;d-;|}Kg<&%nO:P;k<v}BlW`[7I=?qj' );
define( 'NONCE_KEY',        'n|D#)h??R As=oJ3;Xz7-nn~Wez+35)A-hfD:U6H&X!rhVQt>*[agooJX72]4UW_' );
define( 'AUTH_SALT',        'j1SI*$9f>[x=vP 1!KsKM226Wvh;q.rc*ow0Vr?csr}wKW:4a#wVj}78?JQRy4]V' );
define( 'SECURE_AUTH_SALT', 'rdr_>ui/,S+SCAL5{SX=1fqbuR~zRs%G.2L5e0~4J$%NDxMErW{?Z)v_ A;2F1#v' );
define( 'LOGGED_IN_SALT',   'Kr~[4:)v@{J(#+[@+&GZax]vH;)_p+/U! #Hng6-)z}oorsgB{l&3VCa^)n+=aLi' );
define( 'NONCE_SALT',       'pVkoWba+aA)`/8bZa5Bt7N=F8Uwb7(*bD_3~s})U88|Bk,q$Tu39QFKRh,tBnU(f' );

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
