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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hi5ringtones_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8lmu&` 5OqRQdU3^;zW2sL2Zx,n(EA+mzJrt-%dNdxrw-EG2VoYPDvkM$f8cwO}f' );
define( 'SECURE_AUTH_KEY',  '7(Es;BB&9Z%.l1BA}69mTb+RZRLqa{c^QYnhGwholI/zn@^G^NONjKuw%uYE$50Y' );
define( 'LOGGED_IN_KEY',    'Yag{sdNmk^-oj<UoMvuLrvg}@};M,kN%{W6|If?oW`.:x2bo* {7GI_IINg{6!9p' );
define( 'NONCE_KEY',        'v4rb&7:XlKd[ CHIn$m3L<Ws^AG|G!rL9VI22[`ti|<DBxc=^DCv}6Y^u>6E4]?j' );
define( 'AUTH_SALT',        'E%Oipy/9~j/:vA&v).|P$W-H@|R_,6YhcmarBEjp{hJCk=Qwsx2r!`#F*Nd{r<wG' );
define( 'SECURE_AUTH_SALT', 'wap!,ew/_#3Y5=)>{IwnKa@rw`/tL4]jLz}c|Z%eLoOYvD=dzZ0Ho+:0(umZ8r?V' );
define( 'LOGGED_IN_SALT',   'H|SI%Ahjrv8kmt=:fm|,HHmu1plFd85VAAg[k0<kyaS+:LN`L:YJ[=Q<=[$I1w<i' );
define( 'NONCE_SALT',       '22:GU@0Hc7VU:c}F>erCe4Fzzgat(x^Hh%bU7Gd+w@@TjqMRr.aE0*S%9b0W+P[V' );

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
