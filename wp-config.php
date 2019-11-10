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
define( 'DB_NAME', 'light' );

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
define( 'AUTH_KEY',         'zC~ D7|?2(I~yaigpby.vKLpy@DEC0zr;`C6uR*Hl0. e[gOWT~Dq~.QI>MB*805' );
define( 'SECURE_AUTH_KEY',  'UPEr<DK$hZP}q9:,Nk]e;m(TSy~5gutE>cAS{{n0j/~D+A@q/f~Y%{Pk?cNE-]`c' );
define( 'LOGGED_IN_KEY',    'p7uGo)zTmj/0#ls:/oMwlj*%KEzKCqB]f6QWTXK{BU` WUn+5+8J~jd]V&{(cS:f' );
define( 'NONCE_KEY',        'A??>rmy&6cV/^ 7^iH,`@m}h&?ES!AS{yILu,)H5??7bh64*3$0D^iAkO}bn1hR7' );
define( 'AUTH_SALT',        '^laSct{L=^]WV*LFE)wK6r6?xjKrc+{XtB=H.321x f];.Q#E@SV]>FSI953P@af' );
define( 'SECURE_AUTH_SALT', 'TZ-n-B-*NPBQ+R?TkD|-O,;Fq9pJp>+LgJO!.tX.EotInM^j,@cQm[lb`(ShnyUS' );
define( 'LOGGED_IN_SALT',   'n`t{_v1e*<D2rj+<bTeZX?/5wxK+75Hie1L>;g6e-a;9!Qf?|_cX}5W1b3;L49)P' );
define( 'NONCE_SALT',       '>jN!MwtmW?3Xs|i]v>q~6(_hE~y7hlrP(.!? gogsV2a]L.43Ef5iJd{QtO@,hlz' );

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
