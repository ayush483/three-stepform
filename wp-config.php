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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'three_stepform_db' );

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
define( 'AUTH_KEY',         'RS@%;e[I:jN]BjB.YMVg@V;dgW6+yz4/:TP5D%H%-fRoIf]1(#3,.9;!{1733KGn' );
define( 'SECURE_AUTH_KEY',  'M%hBAts,%Dk}VKXV0D~#$~#/yp;jQ[!|#_?Jt]CBbRI>IETL!6F/Qyf?pnB^|-]B' );
define( 'LOGGED_IN_KEY',    '6>M%_JbGd*[<_!`$!gp>gS,)=V?Ctpt,lHBN|RZ@po|+NnIQ+4HN:w.p[_J{;I5w' );
define( 'NONCE_KEY',        'Ux:X-c-~CJ6?:6<I)))t&Ushs!<AcC 9FPT|pZ2OgV9BEw1Sgj1UZPb3}b<xjr!3' );
define( 'AUTH_SALT',        's@zQHUq?FyTR^Xk@W@9fV?6XX&/n~90^y[B$Orko#4?JP},D:)dG{x0//;_rSM@?' );
define( 'SECURE_AUTH_SALT', '<h0Q?VD&tES;LnW|YV`7jPK~,/Ink/[MsN8E[DRnqUs&Mv=i>LU)ZTUe,uh[Gsqq' );
define( 'LOGGED_IN_SALT',   ';%^9tXqKtTuK+v5-uh-/Y5|Z;yT5X)d:@g/+py {}6WOzFcn nq^3%i4gViZB9n6' );
define( 'NONCE_SALT',       'tHc0l2}D6*Vh;L4^-/eI^+:EwK;~WZR~%QB-L)g#C83,RD$-j6(cu#d};XneC5+>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
