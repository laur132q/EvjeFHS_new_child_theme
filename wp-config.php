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
define( 'DB_NAME', 'laurakapper_dkevjefhs' );

/** Database username */
define( 'DB_USER', 'laurakapper_dkevjefhs' );

/** Database password */
define( 'DB_PASSWORD', 'Sivoglaura123' );

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
define( 'AUTH_KEY',         'Msh*_]?!aMT@B(G~bZ.#nL)q *946]9fSgjNQUboT8$%CAh^{Oy$F9kh$#^i<Fly' );
define( 'SECURE_AUTH_KEY',  ':1Ip;>v1p05Sgrdmp8nGYsOpS#L5]q=ttBoJqCJ _/CKfnkqP&Jh#H}=>g$/NIC1' );
define( 'LOGGED_IN_KEY',    'z!BuBJ8.nS:%2+]PiYtV*1-;g?@4p*TujCgrY!Qi=Q!3wZU5_~9;a$0[l~0d:gJ|' );
define( 'NONCE_KEY',        ',QjKR;GqCvFs4x$R^Pz_FQ@^%#_D=nHUtTC6a$,QPAb)j6p9PUjI3E$R.@{0UxyA' );
define( 'AUTH_SALT',        ']J>vU$,Yt) ?NJuvK^Q1. 24#@%J~e1WuD*L03c{SBCRxFcm14R&LY?7lVc~asTf' );
define( 'SECURE_AUTH_SALT', 'IxneP&]gd8Rhil9o&@U]0ELNRc]<H}{!T-rpx!<r|Y4{4AxnR`Kubx@iI]5%~ILj' );
define( 'LOGGED_IN_SALT',   '6 (~lAavfEY@/]v|b6)6b4X_Lz[5:DP=)=XD^ PONAbqt|AllBlP!,wJu}$3Kk=&' );
define( 'NONCE_SALT',       '#aOD@vu//[P~h$njF`9mDOv5`p8g%If=n[9feX@ WKOn0sDC*X}Okdgc]#Tx1ZvI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_EvjeFHS_';

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
