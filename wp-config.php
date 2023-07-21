<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u330776872_LI8Hv' );

/** Database username */
define( 'DB_USER', 'u330776872_d1876' );

/** Database password */
define( 'DB_PASSWORD', 'kotXuUjGiA' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '` ?~^VcF>H0wVD*z:TrgQ~X7XvZ{/2?&yLyJ^>y,iHyiSR 5OupeELV%- 8A!JT&' );
define( 'SECURE_AUTH_KEY',   '{CR=%]6Q]o|afN440_F7RthL9tCd@J&NX]$dbP5TZfm{Fs>R9qF%`av<(*oiV]bR' );
define( 'LOGGED_IN_KEY',     'nvh>|{K3~?[_pydDG71470ss.3IlhHe.ww3z60;y{a5FI wDkw7lm^$#y9X?>Ym3' );
define( 'NONCE_KEY',         'T`Jy`ZD&{)R9>.dl)Dx r^EUABTS/j6cV/%Nest!5-j.1hT]S;RbZ`b|NjC6FXPk' );
define( 'AUTH_SALT',         'v_E7&kGlKp1N~4{@*vuqXRSGP!1Ur]/u{la&V@#rW$uy)$xK;b}#N^]szykAH6~w' );
define( 'SECURE_AUTH_SALT',  'c7i6wm&8AQYv1H>p#;^T>,tg2!Z?^CIdO`M_WX1=XqBruC$7L>M<wK)3vpMe+%v~' );
define( 'LOGGED_IN_SALT',    'A8_8,z?L8SD9Z)/dOF7N&T9z,DsvE@hG}zRZ/uS&Bn[ll~x!NJZ^lLJ1C0y{3ru5' );
define( 'NONCE_SALT',        '@AM-uc>*n?(#lza:~9X,w+*2#o|fD!Ixm;):pH_S.(lJfr<uF,,dM@b9a>Dk9E8f' );
define( 'WP_CACHE_KEY_SALT', '!f5Is#ty0ADtk,>svdKVH86/4}.5%w[gIT~I^.p4#3#~,,%1EJ]d9hO4pV[JHh;y' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
