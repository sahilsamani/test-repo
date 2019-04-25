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
define( 'DB_NAME', 'database-wordpress-backend' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'T@haJHwPG.nnZA1iB4@<+aPX%2rd:nZ-&]m{s4TN*3V2H5*0}X<~yo bD2lH-$[z' );
define( 'SECURE_AUTH_KEY',  '6z-jd0H7GMH]l$C4o?q$6.EoPR-]X6ej$x@U|8<c{w@c5mb9s$DqlsJ<!_4]DwC?' );
define( 'LOGGED_IN_KEY',    '7vBaHQO7ae)r1GI]5*~#S1jc^TA(H4JeB#yZc;WTdpK4`bo*--4<.A~OtqW8%c1D' );
define( 'NONCE_KEY',        'JxB/5p.;+?ty`)md`5a(lDULo}hVJS0<$.0]QuS8EJdQqKtmM:crnQr;qyE=9HES' );
define( 'AUTH_SALT',        '*b&3IIK>,91p!r@UYfa|-SSudNR,2!MVo,[;dCE`O4fO%c=;OE*;K`J-DAd~P?g_' );
define( 'SECURE_AUTH_SALT', 'KT;IO^<;0k$ei;*>y`~M*afbdq+XHK?JpJH$LFIc3h&:&yUGP]#wl+@]tG07L)5c' );
define( 'LOGGED_IN_SALT',   'Q$*;.=aN0pV&.QTx;08_5SJ:#$a}4{`?E&W%V2Ux%/7H3(+.KgQbUmXmx(X89QIf' );
define( 'NONCE_SALT',       'b*Cf8(2;c!ghhTASQ>#CZaS8R8&<S9=Bm/5_CMk&Q:Rw9eS.-{J8ob/BJ@J){$sy' );

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
