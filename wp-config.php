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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '&I2T2<hY4~{<9_<O~l5R,LtJ@XLMT(i;XV{fRznt2e3l$M43iDfF-^=^quo9z#$9' );
define( 'SECURE_AUTH_KEY',  '`;&i_/=W:T-[k*Jz&%A8@fGM:S(y.vT?bn$yj3zPM0%N;mcga_xOJ)2)#a;d2!%V' );
define( 'LOGGED_IN_KEY',    '|U5TtCho@qa~D(5liVA!.8QIm,ltHdaq|{22,S0D.yEulJ@mnI%2>N5m9 /OnzMw' );
define( 'NONCE_KEY',        '}t#P$OhT.>1}(31v -6>#,07uet_>G*Ui)R^bv#viI[h|54QtY5/@l)D!S8cB5[>' );
define( 'AUTH_SALT',        'Z_?9:o7lO:rOu-5}Zn}9G@xKxZkM5butwj~b2T+fI!YqN6]w(ZTC(Q:8I|v9VZ;L' );
define( 'SECURE_AUTH_SALT', 'ZXFHNJMsGAOCIE-<Kr-~^$<fK_g],30oPF-<~k<n]RTw|W-~m3eocWBmLK |o_v1' );
define( 'LOGGED_IN_SALT',   'v-ttIyD8_v.*eGM&>f-?z/O$lmIsTKc$m{7fs{bd6r@AHl{ !>ak`?5=0O!wR{.b' );
define( 'NONCE_SALT',       'HN|H%@mU *;y4S_x]v#I@vG09]Xq#9mj82P[47JC9vm{JGw):-URg%4:r/ /&Ej+' );

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
