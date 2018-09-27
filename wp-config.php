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
define( 'DB_NAME', 'pi' );

/** MySQL database username */
define( 'DB_USER', 'pi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pi' );

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
define( 'AUTH_KEY',         'pSAh;>z|fm.4~/)cT`1?y5BsD_%hiU]i-iFzQ9d*mZ7r}P],<^Z3z rUN5<<L|QX' );
define( 'SECURE_AUTH_KEY',  '_4qFG];`B;R<R };d~5cc^nY/F@;MqPq-7-UK&(wXSqH0Wr#~n{moKqM EB>{WWB' );
define( 'LOGGED_IN_KEY',    '-yky{+VGZGA6d;V_p# z0X{B@yt9rqUF;f!yR4nu(/*7WPpLw@[f{ Km^i*3JYC[' );
define( 'NONCE_KEY',        'OMbn>L(L>.n&B%3}?<j;]do89K>#X`iJ e$sxBwy;T/9s)9t]NlegdyDTJO<p00.' );
define( 'AUTH_SALT',        'GP3H BPL[|gff?}842,MEzK*pf!qwYbjA6dSG.A!>|>w3oqMpFgFgR|ke_Q}lZQ6' );
define( 'SECURE_AUTH_SALT', 'C0]D)%;h0E0IK/b3y[}d~!ADD9NH~9oq^u&Sb.IQH$Y D7~Za.Zuwvs!B{2cJ.$}' );
define( 'LOGGED_IN_SALT',   'g0:paFJ1/.6!XSRA&V-;p=7__RKa=aKL2BYJjYD}yVcgJ xqXhE,1+za6=mzTZlU' );
define( 'NONCE_SALT',       ';k&U/wbJ9< p;r4%G|wKEmx)kT^kmykeHua8I>3U|C4!6s{HL1VZcK}Aj49R:tT@' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

