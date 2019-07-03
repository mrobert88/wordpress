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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'epasql' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '>qB4Pf1.HCME*{.ovhP_&*dN|8?^<OrxbwbHcHe8#vi>mLh<+C#gl|s?zUS?+rK9' );
define( 'SECURE_AUTH_KEY',  'e:Sz!c_=-s`Ef-u.A!`YM3oJ>+<+.9ucsevQp<e*-1?UxdhewUs.W& ![[_f,pN#' );
define( 'LOGGED_IN_KEY',    '40Em884kTt7zp&t@ i!y3se%-i`?^^yLALph?S}7VT,bGOO<.r e((1JQ&s+*>}-' );
define( 'NONCE_KEY',        '7T:,m;W@@(TAD>VxPIWbwz8f|q,I@I[w%[3dr4OFj{nu:zet`OQdzCY@5prLCr45' );
define( 'AUTH_SALT',        'eY(6hzyoq56bPJH$PqiP2{{eEr`i^!NIT#a%Vga!I}:ddLQI0svH*j,v=1yux:.<' );
define( 'SECURE_AUTH_SALT', '96myf}v<I5p0%*V#_LU[=pJ|9&GOV1?7XQ]C7Qtd4XVD3RrG&;p=#4=GwT76;*_<' );
define( 'LOGGED_IN_SALT',   '*FL:!|9p`-Lqr44kA;zlyV{t@#sH~H[YV0P)9N$T5pRDV]2dEY`1h#m8a?XOx.xr' );
define( 'NONCE_SALT',       '{$*|yH,~K2%Ek.0ymu)x`|UonEU0%uZ%nMyI3<#r= XW!=4Cq] /CF/9%]yv]EWu' );

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
