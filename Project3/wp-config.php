<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'project3' );

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
define( 'AUTH_KEY',         'UXZ]Pbu3*-fv[JZ1a {!pgq7WWS7w`B$uijPl{T]gFz$:+pyYiD#/@h_Z2{L2G!a' );
define( 'SECURE_AUTH_KEY',  'lY)$(f)y;,x/l-OyH<gVfV=&^NL_23Wos&|`%J~$B;e-$4f2?-/@Na%hD}#kqhky' );
define( 'LOGGED_IN_KEY',    'P$w/#%A`?K{wCYuzO6p7,&tJv97>`KMFFk *>ILD5O<KkiyWs8I93j`t)BF-ohMl' );
define( 'NONCE_KEY',        'g9>?3:[s0bsSM.r0Y@^}d(a>o209NIFAZiIyS)%#NIy;{@Se4XniU{8nk;E?02f&' );
define( 'AUTH_SALT',        'sJQu))LH_{E|HD4P)SPkgHfvgP.*.4[a*Oct*PhLxP:eVGZ7)LEO!7?-Q1nn9JWg' );
define( 'SECURE_AUTH_SALT', 't*G*?Z:#5{FdaVs-=O%RyepX!C6HP|yDHx%|NIS7&jG#.$ r27|GrFMy~:QE|FP$' );
define( 'LOGGED_IN_SALT',   'qrP~UoDpmw(6arrkXkHwlRL?I9+^B8o[t=uP>N4HXX4_OX1e5u *nEFnl[h5_`Cj' );
define( 'NONCE_SALT',       '4H2*Ou<xM=gC;]9Q7Adz&ff{%Fm{V*C#!?:129aI|0:]$i=rqk){QQirco3[Pp5J' );

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
