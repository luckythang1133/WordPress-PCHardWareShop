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
define( 'DB_NAME', 'web_lkmt' );

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
define( 'AUTH_KEY',         '^@J:J[i%5,cOwujU q{k@6tNT89@NXJHfFczE8RS^/5q$tDGF>[tp*S8nHQP}bZb' );
define( 'SECURE_AUTH_KEY',  'o*HYe_N7GuIq.iz+d`<eV}zf/9d/V][?h7k0jMU1tiMMdmv]j=~Q{,t3a3P-JNp(' );
define( 'LOGGED_IN_KEY',    'G3`/CT[pmbDdF,/#!h1kHGC-~}7BIveq/#.crT2k^oX8LOZ@z&-GJ(kCy.BGF)F&' );
define( 'NONCE_KEY',        'Q&Fc`?H<yUMIw!PSSng,=AAJf0(;aIVnO.q3,]c!]5z L6C;`cBWnJwy/Vd?>>45' );
define( 'AUTH_SALT',        'E}4Gi#r`3tCY;7uGMs(z;q}:Ic)`|eK&1:|}uM?Ip+@+m/13o)K(, [!5=7dU2=y' );
define( 'SECURE_AUTH_SALT', '{PU1;b|K?kE+)*p)2_+F3UN=C mmX7)w(STBY<QP}-z#m#bpE1GB tdJo!@nT6[P' );
define( 'LOGGED_IN_SALT',   'Vo:(2t_ 6O|/tHLI$aup O)mdil[uJ~cH*: qaa>B>GZ(WPt:x[_&uB4,$MT2f2n' );
define( 'NONCE_SALT',       '-B!IaW #ey>D!RKZeqbf$pzQ]&8o-DPr)|-eWC1)ag|pCW,JWe)=y>h9w7x=nf-M' );

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
