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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-wp-site' );

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
define( 'AUTH_KEY',         '^`)8j/xF_1^N#.v%Q55kIwNE:05{E`3#~|T_e5zmn~Z#E4:)%gqh=.qK3h}Pyjsi' );
define( 'SECURE_AUTH_KEY',  'mbp&:)HHsj)/5dOSn!_`E`[@Tt^?/uYQ8}!d1OefXg[OCU{_qj_ZPKoWrdr&_zZ0' );
define( 'LOGGED_IN_KEY',    '4V)n{DN.[O7a+cI%}FC,{25+rJ6Jo@981tx}Xi3d}/84oT<<COY1*sS F^<(t2]F' );
define( 'NONCE_KEY',        'oAz2eghMN?l5C37Zb;h);y>`YXt<yv6-T 1gVia[aI&L]O{(PZAf07]S>V3x{ Gy' );
define( 'AUTH_SALT',        ')e&C;q:N;(gcBsF8w/U*x({XIOKKXhWU|,4j>gt*P~tY>]z)H?6D6o2s}t[)*2yV' );
define( 'SECURE_AUTH_SALT', '<_Ll3%KAEZ:2-Q`^>u.jwkXSIe%7BMOMK^90Uh8CTa~X1&u<Ba1u]%V m-cMa)DY' );
define( 'LOGGED_IN_SALT',   ' :`)(`VYxKjfuYp~Y6uU1hZ,)*RE}Go=M<XPkE&GG_<)F5g!q*vK9jGDT[qhdpRc' );
define( 'NONCE_SALT',       '4M)NUQvzj2IIryI5Wv=tiNzlJ*Djx#0w@Z1*/1+1KUF/V3W-=jXqg+ZFF-q^hJ-X' );

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
