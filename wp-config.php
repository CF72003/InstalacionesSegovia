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
define( 'DB_NAME', 'instalacionessegovia' );

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
define( 'AUTH_KEY',         'P*CgtoDaVS=aTTA?t>t-9(SgGf<Tn>F)lsMNYh/p4|rxy8G]i36/:<[PHh<=?xM1' );
define( 'SECURE_AUTH_KEY',  'mwz=p`wlXZEs_llP?*>hIR}naM(_#vL7DP-HY&V#$}2B>[52q^sDf-TUw+[;p`Oa' );
define( 'LOGGED_IN_KEY',    'cU]s~U{ZQl*[~po$zZ/(^`ELN.uKY4ht)u{g|<Q{e]-i[[@y5L)#L,~ovXkd=E;I' );
define( 'NONCE_KEY',        'n<_G)$0O0MDDTfS+&N{8d%QD`2gBl24- mUx: -q)8AtBit(?/Wy=LK-?LfZdX:$' );
define( 'AUTH_SALT',        'O2PqR=3SOcn7&Nu$|PeHnoQ5d9Y+eb5E]eo$]~-RiM$NTj>hF#/CwN}r DV?tpWZ' );
define( 'SECURE_AUTH_SALT', '[P)+CbS);C*:htks|1D/e/%Z_9SZ`D`#-~U4z#E*ZN4<C_<!EV2m?a-b;i#VedyV' );
define( 'LOGGED_IN_SALT',   'F]).%O-r6Ydi1_[l{TzjutpFPA2aGJ)Ls;f;lXfLC|Tt_YC<5RgQ*:#+G9Kh26^p' );
define( 'NONCE_SALT',       'Q>.i3tBHi$`yqE*sF6?itz*3ON+f^&:<Xw+(4btI&cR`Cc]GbjzE]Cz~3MylbAx@' );

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
