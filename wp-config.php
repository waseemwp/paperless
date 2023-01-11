<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'b8AlwFylx4dvQV' );

/** Database username */
define( 'DB_USER', 'b8AlwFylx4dvQV' );

/** Database password */
define( 'DB_PASSWORD', 'ODbFODZxYE6gEp' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '9y=X5/15P~o,5s*MQFWiSs#s1(9/`;V*&Sb*6`--KC0EaGkED:8u;*L4OLv71$YF' );
define( 'SECURE_AUTH_KEY',   'ai6lTTZKy.QT0(}/IX&WtjSn5ih?>_oE_@K9%C[,UP:eDG| %s:z}:5Wc+WRQhMx' );
define( 'LOGGED_IN_KEY',     '@6Vj:1{-20X6)0.VB9qxm6Vjuf?u41_`g;MsyeHPnSSV6}Z>UdPc(8Kvw-nL/X/K' );
define( 'NONCE_KEY',         'ZFH]Saa<Km`7/fyrA5^hKg`Id8[OOK7Rl_YB 6968jZJ,xVp-@hA=(^*t@y7C{?u' );
define( 'AUTH_SALT',         'a;oJP5hd&N{=9;Fk3:UK2p3tW*5!gp@<|Aon6`]fX/&_@);cBeKSa^U4B65]bT=q' );
define( 'SECURE_AUTH_SALT',  '=lBt&p)o!]w:^o:_synU2%9mHM w_?39|s=y9zz93T,7ES7V$R_vCjeCQg:?/8FC' );
define( 'LOGGED_IN_SALT',    '5`%xC+<+@#N%atnWcA__-r8l^wGtOx`2:)ypk7egwE]ea%,=k<>ak1F;$.UDJVdq' );
define( 'NONCE_SALT',        ' rDn_a o{5+-p bH2lJ9)axEwJ6do-&-[VDFl!@R5uED(p%]:_,#wL$Ua.FL,XI}' );
define( 'WP_CACHE_KEY_SALT', '[p{+$K2 dbD{c3h++T)(6C_fcdq%A+P>YXbG%b8/vH(f&B(6ss_:M/At%Ui]r(kk' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
