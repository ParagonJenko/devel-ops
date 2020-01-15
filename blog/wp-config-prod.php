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
define( 'DB_NAME', 'devepehr_wp_devel_ops_blog' );

/** MySQL database username */
define( 'DB_USER', 'devepehr_wp_devel_ops_blog_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cLNrFcb}76~2' );

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
define( 'AUTH_KEY',         '!]8~r24^~8TK+lw4aij?m0.wDRK~XL&22B9i(|}KkYVFe.rfu5H;ZiI7#T%VVD+J' );
define( 'SECURE_AUTH_KEY',  '5S,7+fpgJ0{QHbm3ZWUNlvb_2KDh5Xau,s_yy0ERVBDuP`OHx!%^+%_S~zIyPT!_' );
define( 'LOGGED_IN_KEY',    'J+p;B;4vaEi7css*hHlCwq5NXKO75Y0b21*x}_VnOZ6x!tmRqsL*T(+ZNp!#=5/{' );
define( 'NONCE_KEY',        'T`7k<vXq6!fpf#~I&I$763+}+-K;>Ukh-NO%YQP:,1bdPu2-78P.h_ZXDTU88Nxr' );
define( 'AUTH_SALT',        'g.X.+rSkAlDEwD5<jhz6RU~pJ$_^QubYM<-D*J]]VSCi|~&cp:$VV*M51&cgRD^O' );
define( 'SECURE_AUTH_SALT', 'sEp*{4TN|]+NB0`<:|Y{a`mhfe]J,;3D8/,v@E0p)>A1-!KsDR4gt0[ x,#:p82L' );
define( 'LOGGED_IN_SALT',   'cOu|1/Vbq6FYl&8=d5qDR}$EknjH]b[Di@:){nCjr5SmARipETuif;aMZnzXbAvV' );
define( 'NONCE_SALT',       'qm4I CTIDR^5F7wdDRJQDe`m@0t1?[uaW5SqVgg{nhRsRCjo]sR757sYLD.mFjPd' );

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
