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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'dTdW{$THKf1TBX.p;{]*MI}DN^q2In>c,t-{v6gUSyD)44=~}KQSpzj8=5Z>jqZk' );
define( 'SECURE_AUTH_KEY',   '0l4/|EU;VdN9[KO2g@x!_5x3}eip:HaH<_6y~*HfxNh>@%oh`~s))O?DSZjYiCX&' );
define( 'LOGGED_IN_KEY',     'EDb`GiDjO]cLa(J<yyYmD/z*LP4Dev+FiclhWsTYRT@+ss+zE$!>S4JO{.:tM09S' );
define( 'NONCE_KEY',         '9e77xV!PF;<X0(D+B9DZjMJ_0 b-J6/a{(lY:.Kjj/=Y;v!*_?+?F?R0$FQ9tB6n' );
define( 'AUTH_SALT',         'jUyn-_ZHW|FS&a-b`?{1c,pFdib(f8AY+.>hLckzPc[~(BIm,5g 7O.RGZ,tX[6,' );
define( 'SECURE_AUTH_SALT',  's`1X@4/ulf?sGXKJF6<S1.W}i=8qw^82c@%<fd/62i}6E^/|VV%iNg1wGVM]wbx2' );
define( 'LOGGED_IN_SALT',    'TH5Ib UV7DS $^:%(Qer]rP?Pjl6HO>aqFee{?V!{-M4z]%]q?dM84*)^O;Y~*8=' );
define( 'NONCE_SALT',        '{y$REXfoBRngM9[KQ&sBt3yIyi#RO#Pa;7{GQ!}/VZ]#{X@4R!&_kgQ)=XR~E-y*' );
define( 'WP_CACHE_KEY_SALT', ';9h~3BW)qTX/r7f.1cJ=mLQxM,12aTS4IAOU~A:Y?g`Y58SHJQQLV1$0T.3V6/tM' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
