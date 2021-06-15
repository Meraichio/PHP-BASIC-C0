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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress database' );

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
define( 'AUTH_KEY',         '%ZEc[;~W.|)$nHS=1 t~yW!RHAOmpr`$4wsG~ :^^sLqq|U{?4>riWQN62Vn*Sym' );
define( 'SECURE_AUTH_KEY',  'K<P+kr5 6|Ws|Fui%p7sE!+~fD21V<CR]]!ABn<7ag!V;E6aH0#C3p,+) 7^<B;?' );
define( 'LOGGED_IN_KEY',    '0~|Ox!y&$GG(,#ut0|fFW|O0k}!t:.VjSU2`t))ChfM]$tU8*Mdmo[lOFw;6!hOX' );
define( 'NONCE_KEY',        'sK3w =.{DaG_`r7gj(BEwr7Q-w(9vng@A2GD^yEwh>$j~R3BUYl]JVL],><Yc1LE' );
define( 'AUTH_SALT',        '>NXAh!*V#nh]r;O}Z_Vla,D|C1}kibG4QS!*$C@|6FXlvS8BHW$*[+opt9RO*=ja' );
define( 'SECURE_AUTH_SALT', ';#~j>-nl0w d@(=HoeFhrzZ[]ZMyKDs&;UlW0+(wjaloX]9y*t=Hmg(JO=/@0nt(' );
define( 'LOGGED_IN_SALT',   'Qj8-iXu}`::CM0l}.@BtSUoS.J{_:wvjY-} hga9nVx[v-x5#g$L=/9*C:66mHe3' );
define( 'NONCE_SALT',       '}-B1;mImGz<>ltw/9U9L+MpjNZcp7DG|aZbWzNDdVQCQk~0}HJ(b36Ldc2NG8?LC' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
