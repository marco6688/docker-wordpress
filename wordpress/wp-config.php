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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'm/1xylD_s#*5`0%#Z87FVgfW;*`ofFobP5z .qV=!dheWYIP#ccoel(yAk%()S+K' );
define( 'SECURE_AUTH_KEY',  'cy9dDeOjiF/b68=Sk*3 SlMPdf70D7Sa[ho`!=?sS[U,iWx2u0;lH8ltYl<VuA&#' );
define( 'LOGGED_IN_KEY',    '}E+x2j_0][9I9xNT2XKMoCJ-!y`un]Ug_h!AX:t[cKKzfnOIs8aEORT.:)60hf- ' );
define( 'NONCE_KEY',        '+5dN(3BPGNq;}swJ0 g!qnHS=.V&S=v #_&fqgW|pm=aJtoz4uu,,@%Sdz#!lLkK' );
define( 'AUTH_SALT',        'w+,19SfR*msqI]|xE2}/l+y3|m>[4jK`4<@qd:vLn`4rYsMF7ySQ9QSlPr7=Amd<' );
define( 'SECURE_AUTH_SALT', 'VdF[e$z&&&l@OlgpR[yIVVI1k!Chr:+PNySK;|.sT]Y0PLdWhkeyUj8Wn4jB9;pR' );
define( 'LOGGED_IN_SALT',   'G-m~S!Zj><.p,atuY#E:$r *>eJ-Y!4:b#y1@EUiqM.gAF,z9@-O@+.rO/m_f#MI' );
define( 'NONCE_SALT',       'y_rl/*0ayremR@VimtD5Tt8<&q,2,G;jZ`h28)z8aP@3@<>Tw<KW9H|hYWT4 l$0' );

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
