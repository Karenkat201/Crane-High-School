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
define( 'DB_NAME', 'work' );

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
define( 'AUTH_KEY',         'Kp~q}L^@Lxdl15edxwNiO&XsX0V/.(Xhelp3K2E{!3,FT ~:`pc}Y6/xa.gyw*[K' );
define( 'SECURE_AUTH_KEY',  '1kka5SMl3sDw_HY2;+HAk<g)dwh|gIy^LS7]WjD=6;w#[*?8|_Nw65&pboDIHchR' );
define( 'LOGGED_IN_KEY',    'PKRmb*~.)=&>oA,lbqj3FXqR,-Vo?$zWjf[aQzrKg>X/;c3Vn/L]_k`])2:[U3%?' );
define( 'NONCE_KEY',        'i}fd}I4#HkVndD{Pol %73GP3KE3A,AN48=^+M%gC4x{7>,]x(&qFpuiHt*`_(##' );
define( 'AUTH_SALT',        'BUn $c#Pxv(}@/>q&hKKL@#[pq%_)n>Z/4-;~ci:8Bg EaUKP6lL;{hG2:Y6g^^.' );
define( 'SECURE_AUTH_SALT', '?.f*T/=mae[fkmKfg@ ?g=tbWV$q-CRmL8_(:0I:*[TCN><?>wQ~qeC-+hg@Tk2|' );
define( 'LOGGED_IN_SALT',   'W9+:5ggR9.UxD^C`W6b%YPF4m#~iO^he%>:,E/Fsd/K@Q&?3}aqH=Ey04)H?0ECt' );
define( 'NONCE_SALT',       'D1Eaju4N d!Y{[o4-IF}eNIC[_5:.bO*V@w(=jiw~L4 S`CpK^id@uh?}~xlP(*V' );

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
