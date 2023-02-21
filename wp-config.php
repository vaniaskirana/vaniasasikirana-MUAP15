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
define( 'DB_NAME', 'sql9599682' );

/** Database username */
define( 'DB_USER', 'sql9599682' );

/** Database password */
define( 'DB_PASSWORD', 'Xf3ZwqQIAP' );

/** Database hostname */
define( 'DB_HOST', 'sql9.freemysqlhosting.net' );

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
define( 'AUTH_KEY',         '@1?rvskTil;*_*?YOv9a0oV~ hIoRLoojRu=?0:s2}hSp,.l .bE+Lspx+#!}o`b' );
define( 'SECURE_AUTH_KEY',  'CrY^LHYO#URnYV,{.@3`SJz]);BCH=gS+PvW6D0P.d!c(s2HbuR8WTL3GqtC]o`D' );
define( 'LOGGED_IN_KEY',    '[Wr8<x#:]xQ|(j:Zj8%bjIv!93z?ahDix4nE#OmUYA@FdHX(4}<&R+?P4O!.iIjt' );
define( 'NONCE_KEY',        ']yQ&YTI6/^:3(aG?n|EBO|b2*7&N7j]CIv-Lht)So+-f8;cl|$p8/.yls9Yku]NV' );
define( 'AUTH_SALT',        'l3Sbn%MnB&ny%r/8q/h*rU-uqK4k9&ddL vxW{MfTnivL8rHy>l?,uVnN`hKE@x7' );
define( 'SECURE_AUTH_SALT', 'CT1 [E} /}`j3b{Eh8)fF#+wS}M=>rZ&itFEb5I?/7R;R2iYl;mKkPjH6*>SL-8-' );
define( 'LOGGED_IN_SALT',   'Af<}yZB80@Fq-TCm6pp[+39Tj;9+tfWr%G|PH5.Q-mI)9WTn |:B_G7tL.9QpYB*' );
define( 'NONCE_SALT',       '+f{82^i(3@>I,6emaO|&Q%nVszQ6en7oMGjH<%{DPtB44)=Y<mMe%pD]]1{+I|jR' );

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
