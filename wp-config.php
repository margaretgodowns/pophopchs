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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'z!E^_rrPI1%:6>BywrvVDdACOZdtJ?y~(+=OEGiNoXO;g_ixrm|!7zt?6%^kgb*#' );
define( 'SECURE_AUTH_KEY',  'ErqydW8#?f<*$`J;jp7Kj^$iCM+v 3]St}<=lV:4yQt45;I= <cr|qX;T#.oeckM' );
define( 'LOGGED_IN_KEY',    'QsMe`h5*}hp]<acfCHcSggh^ZS<!^QPhN({{-4(!!-[~6+^d4_Sj]legnBpD.0Qd' );
define( 'NONCE_KEY',        '-y/qb`.Y$Zc!t]gS^r-h~AB$z W9UYcd,*4lgp[mMZ$-j1dA =@j5HsJ|nMxzUBK' );
define( 'AUTH_SALT',        'sK3>6Ja~%1I`O8srt>,08Q?&pojhfG$,&6)g_`l(xiI%OqhjbM-#@wXGhS@RYPaJ' );
define( 'SECURE_AUTH_SALT', ' ENKI@,{EZm|n$D.jb2(-9ntUhhA_-NE<:HwcMCTMImf>BJ}k%m!_6Zr/4^ azCV' );
define( 'LOGGED_IN_SALT',   'ZOuw3Pr~@eu%d8!5.~!EzTZ+t0xZY(K}R87{b*Ku|I&I-?AB9>dbMREmIF7-%+p|' );
define( 'NONCE_SALT',       '=$(i/keKsA{<{eSoxcXiFT>Z-+z7ON9=-`D+mP,(^$ |(J_d)p6T(wCwd3G5AIQ(' );

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
