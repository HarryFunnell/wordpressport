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
define( 'AUTH_KEY',         ';hvU[Y88.1`^VuE>N8|bdD`3c$1!Zb%GBo2-K~%.ngS~dqs#*Coh.9I)-0y81UU)' );
define( 'SECURE_AUTH_KEY',  '=y?!U@+.S#Y?P6F0M1Sv+&]:!JhsO06*~W<m.fM U>APS}|C8Oj,6&|#+FUx|%`i' );
define( 'LOGGED_IN_KEY',    ':T.8%|Yv oibT=s0SQgSS:EcWt@tE,;j$&3];x+ygx08UpR&UUYDZJg9?f4UP~tv' );
define( 'NONCE_KEY',        'CAba[G%7rgVt$x+K~BO^j=hO|6sham1;Z)[*t!4b}7?D*anFGdAryH4N@71YQ@d%' );
define( 'AUTH_SALT',        ' |! QQ:eWq-56Z{ Y5%<3IG{nH> r<wcRt[_bAwRi~O3:4 O` nx(I:UX{lQEDW!' );
define( 'SECURE_AUTH_SALT', 'u;]mW QtqE1-r6Y;8Q{ ``x`v-/1~q}L7~o1DFy#7CJ}?p?wC<Hvzc#w;Vt7C1EA' );
define( 'LOGGED_IN_SALT',   'j+X#M~v=&-#u1Dz5s`K%%rt>GSFx,4XD`(J;#lmAMe`xQn}df`AURg`t-8Q=1-:+' );
define( 'NONCE_SALT',       'Gh4(e{#OV;x;AlDk1MB2D1D>?dr&+e*SjSL1D|^?y5e`PdZ(:U}evL6rS}m=Cya^' );

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
