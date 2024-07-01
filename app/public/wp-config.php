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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '7uwQ#7Vw3JZ}E56BakSt$8,Lh`KL6H/DGHb_I_6=?aZ&=]p7`c#P[u<PDVNe*g;.' );
define( 'SECURE_AUTH_KEY',   '}/,KHvO~RBrF63MKH|#KEp_m ]]~10{JV.[$&oD)$)$]`pD=&y-@`^.wqS7sH3#I' );
define( 'LOGGED_IN_KEY',     '~Eg.Mz96p)-INZi)osO=UtRQkm/*QYF[/|NDZvdwpVBC(7)D+QE8?E##Y>a5vOUB' );
define( 'NONCE_KEY',         '-q$@Va@Gm>QqgFl<XHE6De(v`n@2 {LhS!9??{U,jN?rYG(<p6(MMYmWB/z2P%)`' );
define( 'AUTH_SALT',         '5{W7h2,)m3WY!8~ 6!>U8!$CQx5~@33W]FP.`;msdAF*{R/1I.oVQ3-nU@HAvS%G' );
define( 'SECURE_AUTH_SALT',  'x+>}7_<a}4<$J_qQJkpXu(juhJuxrz2N{n_D,}xIptUKyn#,g.~drGiTOHGhJ<$+' );
define( 'LOGGED_IN_SALT',    'YDYCMrj4Gij(5/LyhECcsdq=PVEF?st&^!!KN5XMMN_=2mou?/K$v1_U`{v:H;rp' );
define( 'NONCE_SALT',        'N-iTZ~SN&2#qV2@o,TxIboxv)N B7TeiDAw13wumn111uJ+Nq{#)mK,TYA5=eZJ7' );
define( 'WP_CACHE_KEY_SALT', 'I4k)G%&v>D)8d;YsNTmf*2AQoU!9Qe:gazg:>93{GJlCfr^x)z2kywGs{yauQnJX' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
