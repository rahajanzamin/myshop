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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'G4O]^kb{|>K?W@d;H9cV&:gFr{l@1&5T`xf.KYkTlD2mE/&[<|^$I&y&|6RVKc8 ' );
define( 'SECURE_AUTH_KEY',  '|3Lm{q:U)&<.C@)0vPp@Z0B:$AMRU_qMUB/+:&R;A~%Xf#N9IX04t-^SC)s|g(fG' );
define( 'LOGGED_IN_KEY',    '[.=^s385|km(La});!pvS#Y<;/JCD{v2W0+G@y[606bZAZ:ma~+;;8:clJR}aCkV' );
define( 'NONCE_KEY',        'BbNGC_dImw5-~gR(5v}2$S >vB{?5@C:Bv8Efr*f>L],Q+g7QVlqz?a,;}(X*PiR' );
define( 'AUTH_SALT',        '`GpVtiTFK/m-iPbd:gC/B`:OC|iw+i?yq<x7tfe#HLf$/ppK+/e+56B#0md>>P2l' );
define( 'SECURE_AUTH_SALT', ';aa$HPi,c(L}.gmqK444[7*nmbP|EvvmWF1fW(v0$S~`vZE:%EN(a`iS@_)amAwH' );
define( 'LOGGED_IN_SALT',   'i3h4B b[Wcy*>Q)VoPs=}Rvr;<Budk+6W0rRyaX]b41V.x;q_?qT:vBaA3SE=IQ[' );
define( 'NONCE_SALT',       '}uaPOea8e2{<{_{IA/g}rb+9vaiXcR3q;eR^Yj@O}TyS5d/&+mTGa(0??%n56j90' );

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
