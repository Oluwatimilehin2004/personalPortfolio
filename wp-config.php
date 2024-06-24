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
define( 'DB_NAME', 'winwin' );

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
define( 'AUTH_KEY',         'm5Hs^M;/~Vz#[wDr-mh8?os.&|NlAXE+@*bPjSq~(L:HeBTF`mgb_a-rgs2vL#Wi' );
define( 'SECURE_AUTH_KEY',  'D@]Z/2/T*?PC3]=*?b6.S{ E:4XL*>%_(k/mcU]pm4+@D7&[)kh7T3al=eTt$ZzA' );
define( 'LOGGED_IN_KEY',    't5IOO==Gg,{{PIS$:w%i2,rC62,*=<_uEzu j{i?AzIRJh`L-$pO1P<$U4}a80J(' );
define( 'NONCE_KEY',        'd]P:<vd>mv|EiUaq~w<GYvwf1rV.D#U>#{}fNg^<s&>N mlNb$L{82$7RgQMLs2v' );
define( 'AUTH_SALT',        'HI)8`q$_m2Zj_c]~d1)5uSQ`G*tD]&ssb=?G4D>y8 ^TWo0] aiC@cY4[U-MOL2W' );
define( 'SECURE_AUTH_SALT', 'he.yWjqE{cY&uqK4;]Dp%x&`j6_]/4AzBXz*#*`oeZ`Bol[=Yr|t:.K*z*#@45ev' );
define( 'LOGGED_IN_SALT',   '4UHiPJ(P9OYr*/YKNHy.%3JASXbQUdXq&zF`I-Y#M6i*F}4.J[bICM~@,#fC*V[{' );
define( 'NONCE_SALT',       'S:B:Gj(KPn1gU+qaF[|Ob07:eZ/!KnF1NM.0AIPEMMZQoWK7Rz7sit<@0x?f<j-K' );

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
