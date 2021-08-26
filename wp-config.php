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
define( 'DB_NAME', 'tressis' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'M$Z@Lo`Sw0M5>&2+Qm!xq<W)d()y]p/OsDBr%aA1hh5.9zL,_HdrsswItwO(f#.F' );
define( 'SECURE_AUTH_KEY',  '4HK>$Rs>~xO!)eM%y!XjW/a_4&h:0H._XWY%81[Zsv&&AuP{28s4FObiy6ZpRAq]' );
define( 'LOGGED_IN_KEY',    'z}nS4n q%lOhD 9: iN==,4>-E+NtK`]RO8*`m9%P<QS+Sl*gl?Nxbp55%7O0Vyg' );
define( 'NONCE_KEY',        'SCUaj<9_)~|UR]rRgM4:zD(o`&#JD$?dE4,<NLR)]lJDI Z#l4SaFJYf|!6[RwJ>' );
define( 'AUTH_SALT',        'Uv2zempoo7Ws!;C_Nh<<0]|9JGDx=O=E9uSbe+*-rfaYssAM<RY5ibG)m[e3_;]^' );
define( 'SECURE_AUTH_SALT', 'Q4-FzIg*yO7.^6bqM58w8c!_M[RII5c&0pnS3u`45Za+?ABS6sj2DcPXZa.i{+9>' );
define( 'LOGGED_IN_SALT',   'JOkGg$Tb.z2bjx%6j|7n$C81e=}rcNnSMj`&JModIVVc%Fu;yJORD#stnYoA2c1=' );
define( 'NONCE_SALT',       'Tyo-{Q%GK(=?Bey`|B,2bpON!FiC`t;?~p:]O}z-8m9fH>y1D[PeOo+|G%LX-a)!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
