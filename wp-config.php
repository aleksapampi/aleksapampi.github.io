<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'aleksa' );

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
define( 'AUTH_KEY',         'NTk/.}XJObu_sKI_,LxhJCj/>gB$hJUFbv?eow|`ON_K+thK3xVeV@hZ2X@[|)bD' );
define( 'SECURE_AUTH_KEY',  'XY_7fV_oLk;494 LPNZ!0&BMzwu^y4c*I75;B}8&w{x^}5zN47l7mEGF&AP8Vqf&' );
define( 'LOGGED_IN_KEY',    ' ]11zz?JAa2:)&A?x[!WoRQ umAq39DECmd$Dh `~Kq_MA MBNXfMfaF!G|.r[Fh' );
define( 'NONCE_KEY',        'h:Pi?B#RuUd[L#?kbS@-1<698Cz{Sv#LREnD 5xXVgoMbnod1v{j_Amb1r<@GpD6' );
define( 'AUTH_SALT',        'YhJM<r&gg=?xghI_bKxT8.pjHHEJL!t_9.vMO7$f?by^8F5!&DTkaMFa0z?lnXvg' );
define( 'SECURE_AUTH_SALT', '`f4>Lt@AA{tNJvZw~X|.4:NjkO4m+bJNe~.CJy}k6cSf:3y#TzIEY1s^4YSne{&U' );
define( 'LOGGED_IN_SALT',   'z34i1Sn0[&ot]WT^W:=n36CzsKWiGGf!rOMgiB;6U3B2k7IN4T{.-jRSyI0]7pr7' );
define( 'NONCE_SALT',       'H.;$Jg_d8CrWUYK<8$Q+EsXn=X]}OyX~(b|iuc6_};$GmQ!Ij$1S>zl7bxwH/09d' );

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
