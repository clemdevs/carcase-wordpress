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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cars-db01' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Cu`8K 7L5~mr=8n!/Dt~eE5mkg!D=0!F]=Ht.M3&CeJbR=ih[@|f?]<6#0mD:I@*' );
define( 'SECURE_AUTH_KEY',  'o3C0<r[3cd`$:LR%nR>tV<p*;~KY&&okRHTE&xS^<ti25&gPJ?7Y2Go33Tll=lQ.' );
define( 'LOGGED_IN_KEY',    '5j2ts.EcoO%0)HNgd/5hMh!fn2728V$@j#ZqQB%b?.i`VfR&Na:va4@v/Zic!jk3' );
define( 'NONCE_KEY',        '<UvgH!aZ#43=vXJfD_fck{O?ky!V=c)b]&WNUkr(m_,s%8q@L3|S}vcXXc4#kFlQ' );
define( 'AUTH_SALT',        'gMpk#Q!03{jeqOl=he|qTR[<vb>~p[CspM$b  A*1ZEkSvyG)3EQ1*0$MPil7S;y' );
define( 'SECURE_AUTH_SALT', 'x! <]t_g[ Cs_xSG&7N@v=6:5qoS5u0Lp>>;Sk%F;7,Os;_P!*n6L}B54|(f#]qu' );
define( 'LOGGED_IN_SALT',   '3z3PV?2d?0UK-|o7v9h&3s;w5y/V`:&`UCp:5}#0$|{o~` u2yvkt,v2?d1:j]kJ' );
define( 'NONCE_SALT',       'Y/qFL>;W[L.ES+Z,WIRu!U^Iwm EQ|`6W6d1kE,ySo``5Hn6i0|hW8]+)YS0:C`e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
