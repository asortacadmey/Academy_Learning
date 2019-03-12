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
define( 'DB_NAME', 'aa' );

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
define( 'AUTH_KEY',         '=#@x4%S%CbA&QYEm2jDApDW3aS)?nq;Y@bEZK4pR:yB9x_scXi,_HkcwpqD`yD3v' );
define( 'SECURE_AUTH_KEY',  '#c{RHGcuLqcEDEuYR_?#f/HbN9>pwN]+/gK@DnT/lY,N#)XU-#%!j;qNK1@9ypLd' );
define( 'LOGGED_IN_KEY',    '/yk7TQR]<7|mKh5.|t>^/rHD2LR=?Y|$XZR}36kSBx6Jxj/r:pag.8~E^a-qE`!W' );
define( 'NONCE_KEY',        '(AWc<anF}&!*k<#rywTOb@Yx0y*W^<-KSl3}ldo33pF_HnzfL@{IL=g$,~j]<t, ' );
define( 'AUTH_SALT',        '~bZh7v:|gL!+l9~QKiHZ)vP/ A%qK|Q Vu&JN,YVoM-=QF^!|}>4}{!qqzoaq$uU' );
define( 'SECURE_AUTH_SALT', 'HSc/^nP5s![%2vRWK{aFDNmHqW.fh}FJ)Y|>iQo#3;a@opaet6_f1R<a!e*#9*mW' );
define( 'LOGGED_IN_SALT',   '&}Nqh`e[w9-*V)Z~pdQ+ H!Jh-T%]5AJ4?<.aV}Asi^omWjQ]!KK(F*mk&x:w]N?' );
define( 'NONCE_SALT',       'tZ]0[0b+U1:ynAjez/``-N%#*/Fb7)zS[N%u7m[m aEn|plL- P!ee!8Z&f~!M[3' );

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
