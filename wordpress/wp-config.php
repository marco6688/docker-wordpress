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
define( 'AUTH_KEY',         'vW`BGqv&_3bs#Ewy$%_K4|#Z06*_GXyF>#;@]t!/37,^&5A[vMp:Y 3aZuh=^-=]' );
define( 'SECURE_AUTH_KEY',  '~m/g:h5 R*;O9zE{/&),xMlR&o>+d7 R7l:]~KAm&!n)FkxNv&c_,]IL]d_4g+[:' );
define( 'LOGGED_IN_KEY',    'mG;ICiH1CIF`BM?n#!#UV_|)0Z3K. ~Pcg|mNc/0%pcRAMD:K0CMQ9g.UX7~Tzbv' );
define( 'NONCE_KEY',        '2LH$;aEL/3mLJs7m ?E+b5HoGO!i1:^QrZ_T]4<_ oNRUx]2}=l6wede[n9WTBzR' );
define( 'AUTH_SALT',        'mI~h_RGLAfvuEX@P?e-DMmc04L&ei/iRh)IlFe5<9v6h~Fq%uAL-:/Yr6tBLYhxa' );
define( 'SECURE_AUTH_SALT', '$tfp%|)CqXfK]<@(_~]yDL+@~rxn$;mHSh,tTnGx)qtIC|+!7Qi;X3yLC+cjs{ij' );
define( 'LOGGED_IN_SALT',   'isX61_<C+lL0NZT)Ff~K9&r.?]3B?q`(J1-e}~d2J.cUfb<3KoG/XB;kHhSDnQ$Q' );
define( 'NONCE_SALT',       'BG4.Q#x8P_KzaV79Pwf<x1DMy]NFgRfa6URj_(9Cb!EE@{3R`5Hxj66HGNv`N3Vx' );

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
