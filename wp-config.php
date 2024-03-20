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
define( 'DB_NAME', 'heroku' );

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

// define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         '{%+a su+%Qk4#jDYPL0nB7_e[fB`:p_y3}OS.:^SG,*`<)<#![57BULMa,(*j`qD' );
define( 'SECURE_AUTH_KEY',  'i:Y(R,}k0+76QbF9dMm3d2r,)4&8{0$`Lv)Ufl|-m=Yi];.JOQSc8D>)(Pa=lI].' );
define( 'LOGGED_IN_KEY',    'qaVssjw55h~6c$,<cl.u/NUzEWkjok7wJTGX{W.a`Tg%8PE;LYw u{?J8A$36CR+' );
define( 'NONCE_KEY',        '!0/i&`,h]f|OXCQ+Yzqe{5t=Quf.|`1LM?sazgLuD6YiN wy{J.@Vs#>QUF i1c1' );
define( 'AUTH_SALT',        'HCiacJQ+T#eGK>kX@HYylp5}bpuu)0u)*9[Wd2{{xfx/aIhF=q%&ZM#kx8Dw.Gp[' );
define( 'SECURE_AUTH_SALT', 'BpBC&N=X0eOLUbUi>i6M#WRV5@<?Wj898@GazcL<b6yV8.}]hmgLnNyPn&);ln!L' );
define( 'LOGGED_IN_SALT',   'hQnM/; =vtnQ<{/jf7:EhC+sY)::C8vB0&x,`GBa:l?1sxp@:1Rn7z;i)+h$H0e1' );
define( 'NONCE_SALT',       'yh/kdcS.mK1(d-y|$~B5t}?WO/)_Wnjfl&|#L-?1jzxFc=1`?9JaR2xQEs:KoFJ)' );

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

